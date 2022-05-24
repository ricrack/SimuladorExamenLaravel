@extends('plantilla.base')


@section('barra')
<nav class="flex py-5 bg-green-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
      <p class="text-2xl font-bold ">
Bienvenido Docente  {{auth()->user()->name}}    </p>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

      <li>
        <a href="{{route('iniciarSesion.salir')}}" class="font-semibold 
         py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">
         Salir
        </a>
      </li>  
    </ul>
  </nav>
@endsection