<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Models\Cursos_Grupos;
use App\Models\Grupos_Profesores;

class GrupoController extends Controller
{
    //Mostrar los grupps del curso seleccionado
    public function index($idCurso)
    {
        // Retrieve all cursos from the database
        $idCurso = $idCurso;
        $grupos = Grupo::join("cursos_grupos", "grupos.idGrupo", "=", "cursos_grupos.idGrupo")
                    ->join("cursos", "cursos_grupos.idCurso", "=", "cursos.idCurso")
                    ->where("cursos.idCurso", "=", $idCurso)
                    ->select("grupos.idGrupo", "grupos.codigo")
                    ->get();

        $curso = Curso::find($idCurso);       

        // Pass the cursos to the view
        // print_r($grupos1);
        return view('registro/grupo/show')->with(["grupos" => $grupos, "curso" => $curso]);
    }


    //Agregar nuevo grupo de esto curso
    public function create($idCurso)
    {   
        //Get Cursos
        $curso = Curso::find($idCurso);

        //return view for create form
        return view ('registro/grupo/create')->with(['curso'=>$curso]);
    }

    public function store(Request $request)
    {
        // dd($request->post());

        // validate fields

        $data = request()->validate([
            'idCurso'=>'required',
            'codigo'=>'required',
            'cursantes'=>'required',
        ]);

        $idCurso = $data["idCurso"]; 

        $newGroup = [
            "codigo" => $data["codigo"],
            "cursantes" => $data["cursantes"],
        ];

        // Insert information
        $inserted = Grupo::create($newGroup);

        //Para normalizar
        $insertedData = [
            "idCurso" => $idCurso,
            "idGrupo" => $inserted->idGrupo
        ]; 

        Cursos_Grupos::create($insertedData);

        // Redirect information(when not using view we have to use redirct for saving data)
        return redirect("registro/curso/grupo/show/$idCurso");
    }

    public function edit(Grupo $grupo)
    {
        $grupos = Curso::all();

        $idGrupo = $grupo["idGrupo"];
        // $cursoData = Cursos_Grupos::join("grupos", "cursos_grupos.idGrupo", "=", "grupos.idGrupo")
        //         ->where("grupos.idGrupo", "=", $idGrupo)
        //         ->select("cursos_grupos.idCurso")
        //         ->get();

        // $curso = Cursos_Grupos::where("idGrupo", $idGrupo)->first()->get(); 
        $curso1 = Cursos_Grupos::select(
            "cursos_grupos.idCurso", 
            "cursos.codigo" 
            )->join("cursos", "cursos.idCurso", "=", "cursos_grupos.idCurso")
            ->where("cursos_grupos.idGrupo", "=", $idGrupo)
            ->get(); 
        // show views
        return view ('registro/grupo/update')->with(['grupo' => $grupo, 'curso1' => $curso1]);
    }

    public function update(Request $request, Grupo $grupo)
    {   
        // validate fields
        $data = request()->validate([
            'codigo'=>'required',
            'cursantes'=>'required'
        ]);

        // remplazar old data for new data
        $grupo->codigo = $data['codigo'];
        $grupo->cursantes = $data['cursantes'];
        $grupo->updated_at = now();

        //Save update
        $grupo->save();

        //Para saber curso con el que se está trabajando
        $idGrupo = $grupo["idGrupo"];
        $curso = Cursos_Grupos::where("idGrupo", $idGrupo)->first(); 
        $idCurso = $curso["idCurso"];

        // Redirect data
        return redirect("registro/curso/grupo/show/$idCurso")->with('success', 'El grupo se ha actualizado exitosamente.');
    }

    public function destroy($idGrupo)
    {
        // Get idCurso a borrar
        $grupo = Grupo::find($idGrupo);

        //Para saber con que curso estamos trabajando
        $curso = Cursos_Grupos::where("idGrupo", $idGrupo)->first(); 
        $idCurso = $curso["idCurso"];

        //Elimninar grupo y volver a los grupos de un curso determinado
        $data = Cursos_Grupos::where("idGrupo", $idGrupo)->delete(); 

        // //deleting Curso
        $grupo->delete();

        // return a json answer
        return redirect("registro/curso/grupo/show/$idCurso")->with('success', 'El grupo se ha Eliminado exitosamente.');
    }


    public function createGrupoProfesor($idGrupo){
        $grupo = Grupo::find($idGrupo);

        $profesores = Profesor::all(); 
        //mandar solo profesores disponibles
        $profesoresYaOcupados = Grupos_Profesores::select("idGrupo", "idProfesor")->get();
        
        $profesoresDisponibles = []; 

        foreach($profesores as $profe){
            $flag = false;
            foreach($profesoresYaOcupados as $ya){
                if($profe["idProfesor"] == $ya["idProfesor"]){
                    $flag = true;
                }
            }

            if(!$flag){
                array_push($profesoresDisponibles, $profe);
            }
        }



        // return $profesoresYaOcupados;
        return view("/registro/grupo_profesor/show")->with(["profesores" => $profesoresDisponibles, "grupo" => $grupo]);

    }

    public function storeGrupoProfesor(Request $request)
    {
        // validate fields
        $data = request()->validate([
            'idGrupo'=>'required', 
            'idProfesor'=>'required', 
        ]); 

        // Insert information
        $res = Grupos_Profesores::create($data);

        $idGrupo = $data["idGrupo"];
        $curso = Cursos_Grupos::select("idCurso")->where("idGrupo", "=", $idGrupo)->get();
        $idCurso = $curso["idCurso"];

        // Redirect information(when not using view we have to use redirct for saving data)
        // return redirect("/registro/grupo_profesor/show/$idGrupo");
        return redirect("/registro/curso/grupo/show/$idCurso");
    }

    public function destroyGrupoProfesor(){
        
    }

}
