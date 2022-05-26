@extends('plantilla/base')

@section('content')

<div class="block mx-auto my-1 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center pt-2">
Editar Examen     </h1>
<h3 class="text-1xl font-bold text-center pt-2">
    {{$examen->materia}}
</h3>

    <form class="mt-4"  method="POST" action="{{route('examenNuevo.editar',$examen->id)}}">
        @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Materia" id="materia" name="materia" value="{{$examen->materia}}">
      

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 1" id="pregunta1" name="pregunta1"value="{{$examen->pregunta1}}">


        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta1" name="respuesta1" value="{{$examen->respuesta1}}">
        
        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 2" id="pregunta2" name="pregunta2" value="{{$examen->pregunta2}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta2" name="respuesta2" value="{{$examen->respuesta2}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 3" id="pregunta3" name="pregunta3" value="{{$examen->pregunta3}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta3" name="respuesta3" value="{{$examen->respuesta3}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 4" id="pregunta4" name="pregunta4" value="{{$examen->pregunta4}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta4" name="respuesta4" value="{{$examen->respuesta4}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Pregunta 5" id="pregunta5" name="pregunta5" value="{{$examen->pregunta5}}">

        
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta" id="respuesta5" name="respuesta5" value="{{$examen->respuesta5}}">
        
        

        <button type="submit" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold 
        p-2 my-3 hover:bg-indigo-800">
Actualizar Examen        </button>

    </form>

</div>

@endsection