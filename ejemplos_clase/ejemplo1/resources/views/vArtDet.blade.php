@extends('plantilla');
@section('title')
detalle articulo
@endsection
@section('cabecera')
Detalle articulo {{$n}}
@endsection
@section('contenido')
    El articulo {{$n}} es un componente informático que se utiliza en ordenadores......
    <a href="{{route('listado-Articulos')}}" class='text-center btn btn-info'>Listado Articulos</a>
@endsection