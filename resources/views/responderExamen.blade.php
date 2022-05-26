@extends('plantilla.base')

@section('content')

<div class="block mx-auto my-1 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-blue-400 text-center pt-2">
Respondamos el Examen</h1>

<h1 class="text-3xl font-bold text-red-400 text-center pt-2">&#128515; {{$examen->materia}} &#128515;</h1>
<h2 class="text-2xl font-bold text-green-400 text-center pt-2">
    ¡Mucha suerte!
</h2>

    <form class="mt-4"  method="POST" action="{{route('registrarRespuestas',$examen->id)}}">
        @csrf
      
        <h2 class="font-bold text-yellow-500 text-center" >1.- {{$examen->pregunta1}}</h2>
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta 1" id="respuesta1" name="respuesta1">
        
     
        <h2 class="font-bold text-yellow-500 text-center" >2.- {{$examen->pregunta2}}</h2>
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta 2" id="respuesta2" name="respuesta2">

        <h2 class="font-bold text-yellow-500 text-center" >3.- {{$examen->pregunta3}}</h2>
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta 3" id="respuesta3" name="respuesta3">

        <h2 class="font-bold text-yellow-500 text-center" >4.- {{$examen->pregunta4}}</h2>
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta 4" id="respuesta4" name="respuesta4">

        <h2 class="font-bold text-yellow-500 text-center" >5.- {{$examen->pregunta5}}</h2>
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-600
        p-2 my-2 focus:bg-white" placeholder="Respuesta 5" id="respuesta5" name="respuesta5">
        
        <button type="submit" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold 
        p-2 my-3 hover:bg-indigo-800">
Contestar Exámen        </button>

    </form>

</div>

@endsection