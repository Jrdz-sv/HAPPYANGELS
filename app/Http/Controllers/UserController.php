<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('rol')->get();
        return view('registro/user/show', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        //Get Profesores
        $roles = Rol::all();

        //return view for create form
        return view('registro/user/create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->post());

        // validate fields
        $data = request()->validate([
            'name'=>'required',
            'rol'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        // Insert information
        User::create($data);

        // Redirect information(when not using view we have to use redirct for saving data)
        return redirect('registro/user/show')->with('success', 'El usuario se ha creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load('rol');
        return view('registro/user/show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //Get Profesores
        $users = User::all();

        // show views
        return view ('registro/user/update')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // validate fields
        $data = request()->validate([
            'name'=>'required',
            'rol'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        // remplazar old data for new data
        $user->name = $data['name'];
        $user->rol = $data['rol'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->updated_at = now();

        //Save update
        $user->update($data);

        // Redirect data
        return redirect('registro/user/show')->with('success', 'El usuario se ha actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Get idProfesor a borrar
        $user = User::find($id);

        //deleting Profesor
        $user->delete();

        // return a json answer
        return redirect('registro/user/show')->with('success', 'El usuario se ha Eliminado exitosamente.');
    }


}
