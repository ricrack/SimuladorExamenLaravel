<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examen;


class ExamenNuevoController extends Controller
{

    public function index()
    {
        return view('registroExamen');
    }

    public function seccionRegistrar()
    {

        return view('registroExamen');
    }

    public function registrar(Request $request)
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

    public function destroyExam($id)
    {
        $examen = Examen::find($id);
        $examen->delete();

        return redirect()->route('docente.index');
    }

    public function seccionEditar($id)
    {

        $examen = Examen::find($id);

        return view('editarExamen', compact('examen'));
    }

    public function editar(Request $request, $id)
    {
        $examen = Examen::find($id);

        $examen->update($request->all());

        return redirect()->route('docente.index');
    }
}
