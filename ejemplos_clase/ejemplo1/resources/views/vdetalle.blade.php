@extends('plantilla');
@section('title')
detalle usuario
@endsection
@section('cabecera')
Detalle Usuario {{$nombre}}
@endsection
@section('contenido')
    El usuario {{$nombre}} es un usuario......
    <a href="{{route('listado')}" class='text-center btn btn-info'>Listado Usuarios</a>
@endsection