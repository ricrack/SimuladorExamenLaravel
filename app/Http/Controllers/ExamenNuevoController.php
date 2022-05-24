<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examen;


class ExamenNuevoController extends Controller
{

    public function values()
    {

        $examen = Examen::all();



        return view('docente.nuevoExamen', compact('examen'));
    }

    public function create()
    {

        return view('docente.registrarExamen');
    }

    public function store(Request $request)
    {

        $examen = new Examen();

        $examen->maestro = auth()->user()->user;
        $examen->materia = $request->materia;

        $examen->pregunta1 = $request->pregunta1;
        $examen->respuesta1 = $request->respuesta1;

        $examen->pregunta2 = $request->pregunta2;
        $examen->respuesta2 = $request->respuesta2;

        $examen->pregunta2 = $request->pregunta2;
        $examen->respuesta2 = $request->respuesta2;

        $examen->pregunta3 = $request->pregunta3;
        $examen->respuesta3 = $request->respuesta3;

        $examen->pregunta4 = $request->pregunta4;
        $examen->respuesta4 = $request->respuesta4;

        $examen->pregunta5 = $request->pregunta5;
        $examen->respuesta5 = $request->respuesta5;

        $examen->save();

        return redirect()->route('docente.index');
    }


    public function destroy($id)
    {
        $examen = Examen::find($id);
        $examen->delete();

        return redirect()->route('docente.index');
    }
}
