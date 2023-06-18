<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\InscripcionesController;

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
// Route::get('/estudiante/curso', [App\Http\Controllers\HomeController::class, 'curso_estudiante']);

// ---------------------------------------------------------------------------------------------------------------------
// Route for estudiante in profesor
// Route::get('/profesor/estudiante', [App\Http\Controllers\HomeController::class, 'estudiante_profesor']);
// Route for cursos in profesor
// Route::get('/profesor/curso', [App\Http\Controllers\HomeController::class, 'curso_profesor']);
// Route for grupos in profesor
// Route::get('/profesor/grupo', [App\Http\Controllers\HomeController::class, 'grupo_profesor']);

// ---------------------------------------------------------------------------------------------------------------------
// Route for inscripcion in registros

// show route for inscripcion
Route::get('/registro/inscripcion/show', [InscripcionesController::class, 'index']);

// create route for inscripcion
Route::get('/registro/inscripcion/create', [InscripcionesController::class, 'create']);

// store route for inscripcion
Route::post('/registro/inscripcion/store', [InscripcionesController::class, 'store']);

// edit route for inscripcion
Route::get('/registro/inscripcion/edit/{inscripcion}', [App\Http\Controllers\InscripcionesController::class, 'edit']);

// update route for inscripcion
Route::put('/registro/inscripcion/update/{inscripcion}', [App\Http\Controllers\InscripcionesController::class, 'update']);

// destroy route for inscripcion
Route::delete('/registro/inscripcion/destroy/{id}', [App\Http\Controllers\InscripcionesController::class, 'destroy']);


// ---------------------------------------------------------------------------------------------------------------------

// Route for crud cursos in registros

// show route
Route::get('/registro/curso/show', [CursoController::class, 'index']);

// create route
Route::get('/registro/curso/create', [App\Http\Controllers\CursoController::class, 'create']);

// store route
Route::post('/registro/curso/store', [App\Http\Controllers\CursoController::class, 'store']);

// edit route
Route::get('/registro/curso/edit/{curso}', [App\Http\Controllers\CursoController::class, 'edit']);

// update route
Route::put('/registro/curso/update/{curso}', [App\Http\Controllers\CursoController::class, 'update']);

// delete route
Route::delete('/registro/curso/destroy/{id}', [App\Http\Controllers\CursoController::class, 'destroy']);



// Route for crud profesores in registros

// show route
Route::get('/registro/profesor/show', [ProfesorController::class, 'index']);

// create route
Route::get('/registro/profesor/create', [App\Http\Controllers\ProfesorController::class, 'create']);

// store route
Route::post('/registro/profesor/store', [App\Http\Controllers\ProfesorController::class, 'store']);

// edit route
Route::get('/registro/profesor/edit/{profesor}', [App\Http\Controllers\ProfesorController::class, 'edit']);

// update route
Route::put('/registro/profesor/update/{profesor}', [App\Http\Controllers\ProfesorController::class, 'update']);

// delete route
Route::delete('/registro/profesor/destroy/{id}', [App\Http\Controllers\ProfesorController::class, 'destroy']);



// show route
Route::get('/info/conocenos', [CursoController::class, 'conocenos']);
Route::get('/info/cursos', [CursoController::class, 'cursos']);

// ---------------------------------------------------------------------------------------------------------------------
// Route for grupos in registros
// Route::get('/registro/grupo', [App\Http\Controllers\HomeController::class, 'grupo_registro'])->name('/registro/grupo');


// Crud para grupos de cada curso en registro

Route::get('/registro/curso/grupo/show/{idCurso}', [App\Http\Controllers\GrupoController::class, 'index']);
Route::get('/registro/curso/grupo/create/{idCurso}', [App\Http\Controllers\GrupoController::class, 'create']);
Route::post('/registro/curso/grupo/store', [App\Http\Controllers\GrupoController::class, 'store']);
Route::get('/registro/grupo/edit/{grupo}', [App\Http\Controllers\GrupoController::class, 'edit']);
Route::put('/registro/grupo/update/{grupo}', [App\Http\Controllers\GrupoController::class, 'update']);
Route::delete('/registro/grupo/destroy/{id}', [App\Http\Controllers\GrupoController::class, 'destroy']);
// Route::get('/registro/grupo/deleteone/{id}', [App\Http\Controllers\GrupoController::class, 'destroy']);



//Crud para agregar profesores a los grupos 



//Crud para gestion de estudiantes
Route::get('/registro/estudiante/show', [App\Http\Controllers\EstudianteController::class, 'index']);
Route::get('/registro/estudiante/create', [App\Http\Controllers\EstudianteController::class, 'create']);
Route::post('/registro/estudiante/store', [App\Http\Controllers\EstudianteController::class, 'store']);
Route::get('/registro/estudiante/edit/{estudiante}', [App\Http\Controllers\EstudianteController::class, 'edit']);
Route::put('/registro/estudiante/update/{id}', [App\Http\Controllers\EstudianteController::class, 'update']);
Route::delete('/registro/estudiante/destroy/{id}', [App\Http\Controllers\EstudianteController::class, 'destroy']);


// Show de los cursos-grupos para estudiante
// show route
Route::get('/estudiante/show', [CursoController::class, 'indexstudent']);

// Show de los cursos-grupos para profesor
// show route
Route::get('/profesor/curso', [CursoController::class, 'indexprofesor']);

// Show de los cursos-grupos para profesor
// show route
Route::get('/profesor/estudiante', [App\Http\Controllers\EstudianteController::class, 'indexprofesor_student']);

// Reportes
Route::get('registro/reports/estudiantesPorGrupo/{idGrupo}', [ReportsController::class, 'estudiantesPorGrupo']);

// Route for crud profesores in registros

// show route
Route::get('/registro/user/show', [UserController::class, 'index']);

// create route
Route::get('/registro/user/create', [App\Http\Controllers\UserController::class, 'create']);

// store route
Route::post('/registro/user/store', [App\Http\Controllers\UserController::class, 'store']);

// edit route
Route::get('/registro/user/edit/{user}', [App\Http\Controllers\UserController::class, 'edit']);

// update route
Route::put('/registro/user/update/{user}', [App\Http\Controllers\UserController::class, 'update']);

// delete route
Route::delete('/registro/user/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy']);


