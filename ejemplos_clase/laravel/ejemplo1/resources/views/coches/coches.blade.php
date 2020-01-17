@extends('plantillas.plantilla');
@section('title')
Coches
@endsection
@section('cabecera')
Listado Coches
@endsection
@section('contenido')
    <ol>
        @foreach ($coches as $item)
        <li><a href="{{route('coches.detalle', $item)}}">{{$item}}</a></li>
        @endforeach
    </ol>
@endsection