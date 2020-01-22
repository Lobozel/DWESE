@extends('plantillas.plantilla')
@section('titulo')
    Crear libro
@endsection
@section('cabecera')
    Nuevo Libro
@endsection
@section('contenido')
<div class='container mt-3 mb-2'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<form name="crear" action="{{route('libros.store')}}" method="POST">
  @csrf
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Título" name='titulo' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="ISBN" maxlength="13" name='isbn' required>
      </div>
      <div class="col">
        <input type="number" class="form-control" placeholder="PVP(€)" step='0.10' min='0' name='pvp' required>
      </div>
      <div class="col">
        <input type="number" class="form-control" placeholder="Stock" name='stock' step='1' min='0'>
      </div>
    </div>
    <div class='row mt-3'>
        <div class="col">
            <label for="ta" class='normal'>Sinopsis</label>
            <textarea class="form-control" id="a" rows="4" name='sinopsis' required></textarea>
          </div>
    </div>
    <div class='row mt-3'>
        <div class='col'>
            <input type='submit' class='btn btn-info normal' value='Crear'>
            <input type='reset' class='btn btn-warning normal' value='Limpiar'>
            <a href="{{route('libros.listado')}}" class='btn btn-info'>Volver</a>
        </div>
    </div>
  </form>
@endsection