<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    public function home($id)
    {
        $examen = Examen::find($id);

        return view('responderExamen', compact('examen'));
    }

    public function responder(Request $request, $id)
    {

        $examen = Examen::find($id);
        $calificaciones = Respuesta::all();


        foreach ($calificaciones as $control) {
            if ($control->userAlumno == auth()->user()->user && $control->materia == $id) {
                $examen = Examen::all();

                return redirect()->route('alumno.index');
            }
        }


        $respuesta = new Respuesta();

        $respuesta->userAlumno = auth()->user()->user;
        $respuesta->userMaestro = $examen->maestro;
        $respuesta->materia = $id;
        $respuesta->respuesta1 = $request->respuesta1;
        $respuesta->respuesta2 = $request->respuesta2;
        $respuesta->respuesta3 = $request->respuesta3;
        $respuesta->respuesta4 = $request->respuesta4;
        $respuesta->respuesta5 = $request->respuesta5;

        $respuesta->save();

        $examen = Examen::all();

        return redirect()->route('alumno.index');
    }

    public function verRespuestas()
    {

        $examen = Examen::all();

        $calificaciones = Respuesta::all();

        return view('calificaciones', compact('calificaciones', 'examen'));
    }
}
