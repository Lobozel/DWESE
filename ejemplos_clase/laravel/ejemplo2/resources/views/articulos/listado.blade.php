@extends('plantillas.plantilla')
@section('titulo')
    Listado Articulos
@endsection
@section('cabecera')
    ARTICULOS DISPONIBLES
@endsection
@section('contenido')
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagen</th>
        <th scope="col">Precio (€)</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->imagen}}</td>
            <td>{{$item->pvp}}</td>
            <td></td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection