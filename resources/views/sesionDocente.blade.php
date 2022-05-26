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
        py-2 px-4 rounded-md bg-red-500 hover:bg-white hover:text-red-700">
         Salir
        </a>
      </li>  
    </ul>
  </nav>
@endsection

@section('bienvenida')
<h1 class="text-5xl text-center pt-10">
  Bienvenido Maestro <br><b>{{auth()->user()->name}}</b>
</h1>
@endsection

@section('boton')

<li class="mx-2">
  <a href="{{route('examenNuevo.seccionExamen')}}" class="font-semibold py-3 px-4 rounded-md bg-green-400 text-white hover:bg-blue-700  ">
    Agregar Exámen      
  </a>
</li>
@endsection

@section('titulo')

<main class="p-10 flex justify-center">
  <h1 class="font-semibold bg-gray-600 py-2 px-3 rounded-md text-white">
    Estos son tu exámenes registrados
  </h1>
</main>
@endsection

@section('content')




<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-blue-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Materia</th>
          <th class="w-1/16 py-4 ...">Creado</th>
          <th class="w-1/16 py-4 ...">Actualizado</th>
          <th class="w-28 py-4 ...">Acciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($examen as $row)
        @if($row->maestro==auth()->user()->user)
        <tr>
          <td class="py-3 px-6">{{$row->id}}</td>
          <td class="p-3 text-center">{{$row->materia}}</td>
          <td class="p-3 text-center">{{$row->created_at}}</td>
          <td class="p-3 text-center">{{$row->updated_at}}</td>

          <td class="p-3 flex justify-center  " >

          <form action="{{route('examenNuevo.destroy',$row->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
            <i class="fas fa-trash"></i></button>
          </form>



            <a href="{{route('examenNuevo.seccionEditar',$row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>
        </tr>
      
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection



