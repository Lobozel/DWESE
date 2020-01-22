@extends('plantillas.plantilla')
@section('titulo')
    Listado Libros
@endsection
@section('cabecera')
    LIBROS DISPONIBLES
@endsection
@section('contenido')
@if(Session::has('mensaje'))
<div class='container mt-3 mb-3 alert-success'>
  {{Session::get('mensaje')}}
</div>
@endif
<a href="{{route('libros.create')}}" class='btn btn-success mt-2 mb-2 normal'>Nuevo Libro</a>
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
            <td>
              <form name="borrar" action="{{route('libros.destroy',$item)}}" method='POST' style='white-space:nowrap;'>
                @csrf
                 @method('DELETE')
              <a href="{{route('libros.edit',$item)}}" class='btn btn-warning normal'>Edit</a>
                <input type="submit" value="Borrar" class='btn btn-danger normal'>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{$libros->links()}}
@endsection