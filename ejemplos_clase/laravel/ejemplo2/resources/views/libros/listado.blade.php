@extends('plantillas.plantilla')
@section('titulo')
    Listado Libros
@endsection
@section('cabecera')
    LIBROS DISPONIBLES
@endsection
@section('contenido')
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Título</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Precio (€)</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($libros as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->titulo}}</td>
            <td>{{$item->sinopsis}}</td>
            <td>{{$item->pvp}}</td>
            <td>{{$item->isbn}}</td>
            <td>{{$item->stock}}</td>
            <td></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection