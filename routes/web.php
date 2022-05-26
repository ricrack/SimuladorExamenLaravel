<?php

use App\Http\Controllers\ExamenNuevoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioSesion;
use App\Http\Controllers\RespuestasController;

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


Route::get('/alumno', [InicioSesion::class, 'valuesAlumno'])
    ->name('alumno.index');


Route::get('/docente', [InicioSesion::class, 'values'])
    ->middleware('auth.docente')
    ->name('docente.index');

Route::get('iniciarSesion', [InicioSesion::class, 'home'])->name('iniciarSesion.home');

Route::get('iniciarSesion/registro', [InicioSesion::class, 'registro'])->name('iniciarSesion.registro');

Route::post('iniciarSesion/entrar', [InicioSesion::class, 'entrar'])
    ->name('login.entrar');

Route::post('iniciarSesion/registro', [InicioSesion::class, 'registrar'])
    ->name('login.registrar');

Route::get('iniciarSesion/salir', [InicioSesion::class, 'salir'])
    ->middleware('auth')
    ->name('iniciarSesion.salir');


Route::delete('/docente/destroy/{id}', [ExamenNuevoController::class, 'destroyExam'])
    ->name('examenNuevo.destroy');

Route::get('/docente/registrarExamen', [ExamenNuevoController::class, 'seccionRegistrar'])
    ->middleware('auth.docente')
    ->name('examenNuevo.seccionExamen');

Route::post('/docente/registrarExamen', [ExamenNuevoController::class, 'registrar'])
    ->name('examenNuevo.registrar');

Route::get('/docente/modificarExamen/{id}', [ExamenNuevoController::class, 'seccionEditar'])
    ->middleware('auth.docente')
    ->name('examenNuevo.seccionEditar');

Route::post('/docente/modificarExamen/{id}', [ExamenNuevoController::class, 'editar'])
    ->name('examenNuevo.editar');

Route::get('/alumno/responder/{id}', [RespuestasController::class, 'home'])
    ->name('respuesta.seccionResponder');

Route::post('/alumno/registrarRespuestas/{id}', [RespuestasController::class, 'responder'])
    ->name('registrarRespuestas');

Route::get('/alumno/verCalificaciones', [RespuestasController::class, 'verRespuestas'])
    ->name('respuesta.verRespuesta');
