<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Profesores from the database
        $profesores = Profesor::all();

        // Pass the Profesores to the view
        return view('registro/profesor/show', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        //Get Profesores
        $profesores = Profesor::all();

        //return view for create form
        return view ('registro/profesor/create')->with(['profesores'=>$profesores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->post());

        // validate fields
        $data = request()->validate([
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        // Insert information
        Profesor::create($data);

        // Redirect information(when not using view we have to use redirct for saving data)
        return redirect('registro/profesor/show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //Get Profesores
        $profesores = Profesor::all();

        // show views
        return view ('registro/profesor/update')->with(['profesor' => $profesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        // validate fields
        $data = request()->validate([
            'nombre'=>'required',
            'apellido'=>'required'
        ]);

        // remplazar old data for new data
        $profesor->nombre = $data['nombre'];
        $profesor->apellido = $data['apellido'];
        $profesor->updated_at = now();

        //Save update
        $profesor->save();

        // Redirect data
        return redirect('registro/profesor/show')->with('success', 'El profesor se ha actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idProfesor)
    {
        // Get idProfesor a borrar
        $profesor = Profesor::find($idProfesor);

        //deleting Profesor
        $profesor->delete();

        // return a json answer
        return redirect('registro/profesor/show')->with('success', 'El profesor se ha Eliminado exitosamente.');
    }


}
