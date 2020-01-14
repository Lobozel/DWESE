@extends('plantilla');
@section('title')
ver articulos
@endsection
@section('cabecera')
Listado de articulos
@endsection
@section('contenido')
    <ol>
    @foreach($articulos as $item)
    <li><a href="{{route('detalle-Articulos', $item)}}">{{$item}}</a></li>
    @endforeach
    </ol>
@endsection