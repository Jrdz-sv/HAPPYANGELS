<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function index(){
        $estudiantes = Estudiante::all();

        // Pass the cursos to the view
        return view('registro/estudiante/show', compact('estudiantes'));
    }

    public function indexprofesor_student(){

        //Get all estudiantes
        $estudiantes = Estudiante::all();

        // Pass the estudiantes to the view
        return view('profesor/estudiante', compact('estudiantes'));
    }

    public function create()
    {   
        //Retornar formulario para crear nuevo estudiante
        return view ('registro/estudiante/create'); 
    }

    public function store(Request $request)
    {
        // validate fields
        $data = request()->validate([
            'nombre'=>'required', 
            'apellido'=>'required', 
        ]); 

        // Insert information
        Estudiante::create($data);

        // Redirect information(when not using view we have to use redirct for saving data)
        return redirect('registro/estudiante/show');
    }

    

    public function edit(Estudiante $estudiante){

        return view('registro/estudiante/update')->with(['estudiantes' => $estudiante]); 
    }

    public function update(Request $request, Estudiante $estudiante)
    {

        // validate fields
        $data = request()->validate([
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        // remplazar old data for new data
        $estudiante->nombre = $data['nombre'];
        $estudiante->apellido = $data['apellido'];
        $estudiante->updated_at = now();

        //Save update
        $estudiante->save();

        // Redirect data
        return redirect('registro/estudiante/show')->with('success', 'El estudiante se ha actualizado exitosamente.');
    }

    public function destroy($idEstudiante)
    {
        // Get idCurso a borrar
        $estudiante = Estudiante::find($idEstudiante);

        //deleting Curso
        $estudiante->delete();

        // return a json answer
        return redirect('registro/estudiante/show')->with('success', 'El estudiante se ha eliminado exitosamente.');
    }

}
