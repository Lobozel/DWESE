@extends('plantillas.plantilla');
@section('title')
Detalle Coche {{$nombre}}
@endsection
@section('cabecera')
Detalle de {{$nombre}}
@endsection
@section('contenido')
El coche {{$nombre}} ...
<a href="{{route('coches.ver')}}" class='text-center btn btn-info'>Listado coches</a>
@endsection