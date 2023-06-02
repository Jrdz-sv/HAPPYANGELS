<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Dashoboard
    public function index()
    {
        return view('dashboard');
    }

    // Cursos in registros
    public function curso_registro()
    {
        return view('/registro/curso');
    }

    // Cursos in profesor
    public function curso_profesor()
    {
        return view('/profesor/curso');
    }

    // Cursos in estudiante
    public function curso_estudiante()
    {
        return view('/estudiante/curso');
    }
    
}
