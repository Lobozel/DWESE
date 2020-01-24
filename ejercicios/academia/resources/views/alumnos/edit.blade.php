{{--Plantilla a utilizar--}}
@extends('plantillas.plantilla')
{{--título de la página--}}
@section('titulo')
    Editar Alumno
@endsection
{{--Texto en la etiqueta h1 (cabecera)--}}
@section('cabecera')
    Editar Alumno
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
{{--Formulario donde modificaremos los datos del Alumno--}}
{{--en el action la ruta es alumnos.update que es quien se encargará del proceso de actualizar el alumno--}}
<form name="editar" action="{{route('alumnos.update')}}" method="POST">
  @csrf {{--Token obligatorio en formularios por seguridad--}}
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" value="{{$alumno->nombre}}" name='nombre' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{$alumno->apellidos}}" name='apellidos' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{$alumno->email}}" name='email' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{$alumno->direccion}}" name='direccion' required>
      </div>
      <div class="col">
        <input type="text" class="form-control" value="{{$alumno->telefono}}" name='telefono'>
      </div>
    </div>
    <div class='row mt-3'>
        <div class='col'>
            {{--Botón submit que envia los datos del formulario para el proceso de modificación del alumno--}}
            <input type='submit' class='btn btn-info normal' value='Editar'>
            {{--Botón que resetea los cambios del formulario--}}
            <input type='reset' class='btn btn-warning normal' value='Limpiar'>
            {{--Botón que permite volver a la página con la lista de alumnos--}}
            <a href="{{route('alumnos.listado')}}" class='btn btn-info'>Volver</a>
        </div>
    </div>
  </form>
@endsection