<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login form route
Route::get('/', function () {
    return view('auth/login');
});

// Auth
Auth::routes();

// Dashboard-Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ---------------------------------------------------------------------------------------------------------------------
// Route for cursos in estudiante
Route::get('/estudiante/curso', [App\Http\Controllers\HomeController::class, 'curso_estudiante'])->name('/estudiante/curso');

// ---------------------------------------------------------------------------------------------------------------------
// Route for estudiante in profesor
Route::get('/profesor/estudiante', [App\Http\Controllers\HomeController::class, 'estudiante_profesor'])->name('/profesor/estudiante');
// Route for cursos in profesor
Route::get('/profesor/curso', [App\Http\Controllers\HomeController::class, 'curso_profesor'])->name('/profesor/curso');
// Route for grupos in profesor
Route::get('/profesor/grupo', [App\Http\Controllers\HomeController::class, 'grupo_profesor'])->name('/profesor/grupo');

// ---------------------------------------------------------------------------------------------------------------------
// Route for inscripcion in registros
Route::get('/registro/inscripcion', [App\Http\Controllers\HomeController::class, 'inscripcion_registro'])->name('/registro/inscripcion');


// ---------------------------------------------------------------------------------------------------------------------

// Route for crud cursos in registros

// show route
Route::get('/registro/curso/show', [App\Http\Controllers\CursoController::class, 'index'])->name('/registro/curso/show');

// create route
Route::get('/registro/curso/create', [App\Http\Controllers\CursoController::class, 'create'])->name('/registro/curso/create');

// store route
Route::post('/registro/curso/store', [App\Http\Controllers\CursoController::class, 'store'])->name('/registro/curso/store');

// edit route
Route::get('/registro/curso/edit/{curso}', [App\Http\Controllers\CursoController::class, 'edit'])->name('/registro/curso/edit');

// update route
Route::put('/registro/curso/update/{curso}', [App\Http\Controllers\CursoController::class, 'update'])->name('/registro/curso/update');

// delete route
Route::delete('/registro/curso/delete/{id}', [App\Http\Controllers\CursoController::class, 'destroy'])->name('/registro/curso/delete');

// ---------------------------------------------------------------------------------------------------------------------
// Route for grupos in registros
Route::get('/registro/grupo', [App\Http\Controllers\HomeController::class, 'grupo_registro'])->name('/registro/grupo');
