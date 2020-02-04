{{--Plantilla a utilizar--}}
@extends('plantillas.plantilla')
{{--titulo de la página--}}
@section('titulo')
    Listado Alumnos
@endsection
{{--Texto en la etiqueta h1 (cabecera)--}}
@section('cabecera')
    ALUMNOS MATRICULADOS
@endsection
{{--Contenido de la página--}}
@section('contenido')
{{--Comprueba si existe algún mensaje en Session y si lo hay lo muestra--}}
@if(Session::has('mensaje'))
<div class='container mt-3 mb-3 alert-success'>
  {{Session::get('mensaje')}}
</div>
@endif
{{--Tabla que mostrará la información del alumno--}}
<table class="table table-dark normal">
    <thead>
      <tr>
          {{--Celdas de la tabla--}}
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Email</th>
        <th scope="col">Dirección</th>
        <th scope="col">Telefono</th>
        <th scope="col">Acciones</th> {{--Contendrá los botones borrar, y en el futuro el editar--}}
      </tr>
    </thead>
    <tbody>
        {{--Datos de los alumnos--}}
        @foreach ($alumnos as $alumno)
        <tr>
            <th scope="row">{{$alumno->id}}</th>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidos}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>
                {{--Botón borrar en un formulario--}}
              <form name="borrar" action="{{route('alumnos.destroy',$alumno)}}" method='POST' style='white-space:nowrap;'>
                @csrf
                 @method('DELETE')
                <input type="submit" value="Borrar" class='btn btn-danger normal'>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{--Paginación--}}
  {{$alumnos->links()}}
@endsection