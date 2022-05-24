@extends("plantilla.base")
 
 

@section('barra')
<nav class="flex py-5 bg-green-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
      <p class="text-2xl font-bold ">
Inciaremos Sesión      </p>
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

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center pt-2">
        Inicia sesión
    </h1>

    <form class="mt-4"  method="POST" action="iniciarSesion/entrar">

        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900
        p-2 my-2 focus:bg-white" placeholder="Usuario" id="user" name="user">

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900
        p-2 my-2 focus:bg-white" placeholder="Passsword" id="password" name="password">

        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
            * {{$message}}
        </p>
        @enderror

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3
        hover:bg-indigo-800">
            Iniciar Sesión
        </button>

    </form>

</div>



@endsection