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
    return view('auth.login');
});


// Route::get('/index', function () {
//     return view('index');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for cursos in registros
Route::get('/registro/curso', [App\Http\Controllers\HomeController::class, 'curso'])->name('/registro/curso');

// Route::get('/', function () {
//     return view('/registro/curso');
// });
