{{--Plantilla a utilizar--}}
@extends('plantillas.plantilla')
{{--título de la página--}}
@section('titulo')
    Crear Alumno
@endsection
{{--Texto en la etiqueta h1 (cabecera)--}}
@section('cabecera')
    Dar de Alta a un Nuevo Alumno
@endsection
{{--Contenido de la página--}}
@section('contenido')
{{--Comprueba si existe algún error y si lo hay los muestra todos--}}
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
{{--Formulario donde introduciremos los datos del Alumno a crear--}}
{{--en el action la ruta es alumnos.store que es quien se encargará del proceso de creación del alumno--}}
<form name="crear" action="{{route('alumnos.store')}}" method="POST">
  @csrf {{--Token obligatorio en formularios por seguridad--}}
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Nombre" name='nombre' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Apellidos" name='apellidos' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Email" name='email' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Dirección" name='direccion' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Teléfono" name='telefono'>
      </div>
    </div>
    <div class='row mt-3'>
        <div class='col'>
            {{--Botón submit que envia los datos del formulario para el proceso de creación del alumno--}}
            <input type='submit' class='btn btn-info normal' value='Crear'>
            {{--Botón que resetea los cambios del formulario--}}
            <input type='reset' class='btn btn-warning normal' value='Limpiar'>
            {{--Botón que permite volver a la página con la lista de alumnos--}}
            <a href="{{route('alumnos.listado')}}" class='btn btn-info'>Volver</a>
        </div>
    </div>
  </form>
@endsection