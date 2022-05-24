@extends("plantilla.base")
 
 

@section('barra')
<nav class="flex py-5 bg-green-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
      <p class="text-2xl font-bold ">
        Simulador Examen
      </p>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

      <li class="mx-2">
        <a href="{{route('iniciarSesion.home')}}" class="font-semibold hover:bg-white
        hover:text-indigo-700 py-3 px-4 rounded-md">
          Login
        </a>
      </li>
      <li>
        <a href="{{route('iniciarSesion.registro')}}" class="font-semibold 
         py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">
         Registro
        </a>
      </li>  
    </ul>
  </nav>
@endsection

@section('content')
<main class="p-1 flex justify-center">
    <h1 class="hover: text-blue-500 font-semibold text-6xl">Bienvenido al Simulador</h1>
</main>

<div class="container mx-auto pt-10">
<img class="mx-auto " src="https://cdn-icons-png.flaticon.com/512/393/393573.png" width="30%" >
  </div>
@endsection