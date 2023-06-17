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
        // Retrieve all cursos from the database
        $inscrip = Inscripcion::all();

        // Pass the cursos to the view
        return view('registro/inscripcion/show', compact('inscrip'));
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

        return view('inscripciones.create', compact('estudiantesOptions', 'cursosOptions', 'gruposOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'estudiante' => 'required',
            'curso' => 'required',
            'grupo' => 'required',
        ]);

        // Crear una nueva inscripción
        $inscripcion = new Inscripcion();
        $inscripcion->estudiante = $request->estudiante;
        $inscripcion->curso = $request->curso;
        $inscripcion->grupo = $request->grupo;
        $inscripcion->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        return redirect()->route('registro/inscripcion/index')->with('success', 'La inscripción se ha realizado exitosamente.');
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
