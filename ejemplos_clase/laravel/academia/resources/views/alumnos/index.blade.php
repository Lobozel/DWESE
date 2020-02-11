@extends('plantillas.plantilla')
@section('titulo')
Academia s.a.
@endsection
@section('cabecera')
Gestión de Alumnos
@endsection
@section('contenido')
@if ($text=Session::get('mensaje'))
    <p class="alert alert-danger my-3">{{$text}}</p>
@endif
<a href={{route('alumnos.create')}} class="btn btn-info">Crear alumno</a>
<div class="container mt-3">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Detalles</th>
            <th scope="col" class='align-middle'>Apellidos, Nombre</th>
            <th scope="col" class='align-middle'>Mail</th>
            <th scope="col" class='align-middle'>Imagen</th>
            <th scope="col" class='align-middle'>Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <th scope="row"><a href="{{route('alumnos.show',$alumno)}}" style="text-decoration:none"><i class="fa fa-address-card fa-3x"></i></a></th>
                <td class='align-middle'>{{$alumno->apellidos.", ".$alumno->nombre}}</td>
                <td class='align-middle'>{{$alumno->mail}}</td>
                <td class='align-middle'>
                    <img src="{{asset($alumno->logo)}}" width="80px" height="80px" class="img-fluid rounded-circle">
                </td>
                <td class='align-center'>#</td>
            </tr>
            @endforeach          
        </tbody>
      </table>
      {{$alumnos->links()}}
</div>
@endsection