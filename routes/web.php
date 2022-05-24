<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioSesion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/alumno', function () {
    return view('sesionAlumno');
});

Route::get('/docente', function () {
    return view('sesionDocente');
})->middleware('auth.docente');

Route::get('iniciarSesion', [InicioSesion::class, 'home'])->name('iniciarSesion.home');
Route::get('iniciarSesion/registro', [InicioSesion::class, 'registro'])->name('iniciarSesion.registro');
Route::post('iniciarSesion/entrar', [InicioSesion::class, 'entrar'])
    ->name('login.entrar');
Route::post('iniciarSesion/registro', [InicioSesion::class, 'registrar'])
    ->name('login.registrar');
Route::get('iniciarSesion/salir', [InicioSesion::class, 'salir'])
    ->middleware('auth')
    ->name('iniciarSesion.salir');
