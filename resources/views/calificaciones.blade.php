@extends('plantilla.base')

@section('barra')
<nav class="flex py-5 bg-green-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
      <p class="text-2xl font-bold ">
Sección de Calificaciones   </p>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

      <li class="mx-2">
        <a href="{{route('alumno.index')}}" class="font-semibold hover:bg-white
        hover:text-indigo-700 py-3 px-4 rounded-md">
Home        </a>
      </li> 

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
  A continuación se muestras tus calificaciones obtenidas</b>
</h1>
@endsection


@section('content')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-blue-500 text-white">
          <th class="w-1/8 py-4 ...">Materia</th>
          <th class="w-1/8 py-4 ...">Respuesta 1</th>
          <th class="w-1/16 py-4 ...">Respuesta 2</th>
          <th class="w-1/16 py-4 ...">Respuesta 3</th>
          <th class="w-1/16 py-4 ...">Respuesta 4</th>
          <th class="w-1/16 py-4 ...">Respuesta 5</th>
          <th class="w-1/16 py-4 ...">Contestado</th>
        </tr>
      </thead>
      <tbody>


        @foreach ($examen as $row)
            @foreach ($calificaciones as $rowCal)
                @if($row->id==$rowCal->materia)
                    <tr>
                        <td class="p-3 text-center">{{$row->materia}}</td>

                        @if($rowCal->respuesta1==$row->respuesta1)
                        <td class="p-3 text-center text-green-400">{{$rowCal->respuesta1}} / {{$row->respuesta1}}</td>
                        @else
                        <td class="p-3 text-center text-red-400">{{$rowCal->respuesta1}} / {{$row->respuesta1}}</td>
                        @endif

                        @if($rowCal->respuesta2==$row->respuesta2)
                        <td class="p-3 text-center text-green-400">{{$rowCal->respuesta2}} / {{$row->respuesta2}}</td>
                        @else
                        <td class="p-3 text-center text-red-400">{{$rowCal->respuesta2}} / {{$row->respuesta2}}</td>
                        @endif

                        @if($rowCal->respuesta3==$row->respuesta3)
                        <td class="p-3 text-center text-green-400">{{$rowCal->respuesta3}} / {{$row->respuesta3}}</td>
                        @else
                        <td class="p-3 text-center text-red-400">{{$rowCal->respuesta3}} / {{$row->respuesta3}}</td>
                        @endif

                        @if($rowCal->respuesta4==$row->respuesta4)
                        <td class="p-3 text-center text-green-400">{{$rowCal->respuesta4}} / {{$row->respuesta4}}</td>
                        @else
                        <td class="p-3 text-center text-red-400">{{$rowCal->respuesta4}} / {{$row->respuesta4}}</td>
                        @endif

                        @if($rowCal->respuesta5==$row->respuesta5)
                        <td class="p-3 text-center text-green-400">{{$rowCal->respuesta5}} / {{$row->respuesta5}}</td>
                        @else
                        <td class="p-3 text-center text-red-400">{{$rowCal->respuesta5}} / {{$row->respuesta5}}</td>
                        @endif
                        
                        <td class="p-3 text-center">{{$rowCal->created_at}}</td>
                    </tr>
                @endif
         @endforeach
        @endforeach




      </tbody>
    </table>
  </div>
</div>


@endsection



