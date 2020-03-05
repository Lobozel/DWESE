@extends('plantillas.plantilla')
@section('titulo')
    Detalle Alojamiento
@endsection
@section('cabecera')
    {{$cliente->apellidos}}, {{$cliente->nombre}}
@endsection
@section('contenido')
<div class="container mt-3">
    <div class="card text-white bg-info mt-5 mx-auto" style="max-width: 48rem;">
    <div class="card-header text-center text-weight-bold">
        {{$cliente->apellidos}}, {{$cliente->nombre}} Código ({{$cliente->id}})
    </div>
    <div class="card-body" style="font-size: 1.1em">
        <h5 class="card-title text-center">Código: {{$cliente->id}}</h5>
        <div class="float-right">
            <img src="{{asset($cliente->perfil)}}" class="img-fluid rounded-circle" width="160px" heght="160px">
        </div>
        <p class="card-text"><b>Nombre:</b> {{$cliente->nombre}}</p>
        <p class="card-text"><b>Apellidos:</b> {{$cliente->apellidos}}</p>
        <p class="card-text"><b>mail:</b> {{$cliente->mail}} <i class="fa fa-mail-bulk" aria-hidden="true"></i></p>
        {{-- <p class="card-text"><b>Dias Totales de Vacaciones: </b> 14</p> --}}

    </div>
</div>
<div class="container mt-5 text-center">
    {{-- TODO::Ruta de Ver Estancias --}}
    <a href="{{route('clientes.index')}}" class="btn btn-primary"><i class="fas fa-undo-alt"></i>  Volver</a>
    <a href="#" onclick="return alert('No me ha dado tiempo')" class="btn btn-success ml-3">Ver Estancias</a>
</div>
</div>
@endsection