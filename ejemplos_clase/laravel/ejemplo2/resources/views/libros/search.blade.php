@extends('plantillas.plantilla')
@section('titulo')
    Busquedad
@endsection
@section('cabecera')
    BUSCAR LIBROS
@endsection
@section('contenido')
<div class="row mb-5">
    <div class='col-md-12'>
    <form name="search" method="get" action={{route('libros.index')}} class="form-inline float-right">
        <h3 class='normal mr-3' style='font-weight:bold;'>Buscar: </h3>
        <div class='form-group mr-2'>
            <input type='text' name='titulo' placeholder="Titulo"/>
        </div>
        <div class='form-group mr-2'>
            <input type='text' name='sinopsis' placeholder="Sinopsis"/>
        </div>
        <div class='form-group ml-2'>
            <input type='submit' value='Buscar' class='btn btn-info'>
        </div>
    </form>
</div>
</div>
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Título</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Precio (€)</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
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
          </tr>
        @endforeach
    </tbody>
  </table>
  {{$libros->links()}}
@endsection