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
                'text' => $grupo->codigo
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
        $inscripcion->idCurso = $validatedData['grupo'];
    
        // Save the Inscripcion
        $inscripcion->save();
    
        // Redirect the user to a relevant page
        return redirect()->route('registro/inscripcion/index')->with('success', 'Inscripción creada exitosamente.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
