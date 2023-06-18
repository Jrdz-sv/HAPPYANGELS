<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Estudiante;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::with('estudiante', 'curso', 'grupo')->get();        
    
        return view('registro/inscripcion/show', compact('inscripciones'));
    }            

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = Estudiante::all();


        $cursos = Curso::all();
        $grupos = Grupo::all();
        $grupos = Grupo::select(
            "grupos.idGrupo", 
            "grupos.codigo", 
            "cursos_grupos.idCurso as idCurso", 
        )->join("cursos_grupos" , "cursos_grupos.idGrupo", "=", "grupos.idGrupo")
        ->get();

        

        $estudiantesOptions = $estudiantes->map(function ($estudiante) {
            return [
                'value' => $estudiante->idEstudiante,
                'text' => $estudiante->nombre . ' ' . $estudiante->apellido
            ];
        });

        //Solo estudiantes que no estan en curso

        $inscripciones = Inscripcion::with('estudiante', 'curso', 'grupo')->get();
        $yaCurso = []; 
        foreach($inscripciones as $inc){
            array_push($yaCurso, $inc->estudiante->idEstudiante);
        }
        $otrasOpciones = [];
        foreach($estudiantesOptions as $opc){
            if (!in_array($opc["value"], $yaCurso)){
                //Devuelve objeto cuyo valor o ID no esta en el arreglo $yaCurso
                array_push($otrasOpciones, $opc);
            }
        }
        $estudiantesOptions = $otrasOpciones;

        $cursosOptions = $cursos->map(function ($curso) {
            return [
                'value' => $curso->idCurso,
                'text' => $curso->nombre
            ];
        });

        $gruposOptions = $grupos->map(function ($grupo) {
            return [
                'value' => $grupo->idGrupo,
                'text' => $grupo->codigo,
                'name' => $grupo->idCurso
            ];
        });

        return view('registro/inscripcion/create', compact('estudiantesOptions', 'cursosOptions', 'gruposOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'estudiante' => 'required',
            'curso' => 'required',
            'grupo' => 'required',
        ]);
    
        // Create a new Inscripcion instance
        $inscripcion = new Inscripcion();
        $inscripcion->idEstudiante = $validatedData['estudiante'];
        $inscripcion->idCurso = $validatedData['curso'];
        $inscripcion->idGrupo = $validatedData['grupo'];

        
    
        // Save the Inscripcion
        $inscripcion->save();
    
        // Redirect the user to a relevant page
        return redirect('/registro/inscripcion/show')->with('success', 'Inscripción creada exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {

        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        $grupos = Grupo::all();
        $grupos = Grupo::select(
            "grupos.idGrupo", 
            "grupos.codigo", 
            "cursos_grupos.idCurso as idCurso", 
        )->join("cursos_grupos" , "cursos_grupos.idGrupo", "=", "grupos.idGrupo")
        ->get();

        $estudiantesOptions = $estudiantes->map(function ($estudiante) {
            return [
                'value' => $estudiante->idEstudiante,
                'text' => $estudiante->nombre . ' ' . $estudiante->apellido
            ];
        });

        $cursosOptions = $cursos->map(function ($curso) {
            return [
                'value' => $curso->idCurso,
                'text' => $curso->nombre
            ];
        });

        $gruposOptions = $grupos->map(function ($grupo) {
            return [
                'value' => $grupo->idGrupo,
                'text' => $grupo->codigo,
                'name' => $grupo->idCurso
            ];
        });


        return view("registro/inscripcion/update", compact('estudiantesOptions', 'cursosOptions', 'gruposOptions', 'inscripcion')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
         // validate fields
         $data = request()->validate([
            'curso'=>'required',
            'grupo'=>'required',
            'estudiante'=>'required'
        ]);

        // remplazar old data for new data
        $inscripcion->idCurso = $data['curso'];
        $inscripcion->idGrupo = $data['grupo'];
        $inscripcion->idEstudiante = $data['estudiante'];
        $inscripcion->updated_at = now();

        //Save update
        $inscripcion->save();

        // Redirect data
        return redirect('registro/inscripcion/show')->with('success', 'La inscripción se ha actualizado exitosamente.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete(); 
        return redirect('registro/inscripcion/show')->with('success', 'La inscripción se ha eliminado exitosamente.');

    }
}
