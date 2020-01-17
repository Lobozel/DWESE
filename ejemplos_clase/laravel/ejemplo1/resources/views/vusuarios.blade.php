@extends('plantilla');
@section('title')
ver usuarios
@endsection
@section('cabecera')
Listado de usuarios
@endsection
@section('contenido')
    <ol>
    @foreach($usuarios as $item)
    <li><a href="{{route('detalle', $item)}}">{{$item}}</a></li>
    @endforeach
    </ol>
@endsection