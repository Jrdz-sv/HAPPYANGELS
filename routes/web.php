<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

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
// Route::get('/registro/curso/show', [App\Http\Controllers\CursoController::class, 'index']);


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

// ---------------------------------------------------------------------------------------------------------------------
// Route for grupos in registros
// Route::get('/registro/grupo', [App\Http\Controllers\HomeController::class, 'grupo_registro'])->name('/registro/grupo');
