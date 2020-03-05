@extends('plantillas.plantilla')
@section('titulo')
    trural
@endsection
@section('cabecera')
    Turismo Rural
@endsection
@section('contenido')
<div class="container mt-3">
    <div class="row mt-5">
    <div class="col-4 text-center">
        <a href="" class="btn btn-success">Alojamientos</a>
    </div>
    <div class="col-4 text-center">
    <a href="{{route('clientes.index')}}" class="btn btn-info d-inline">Clientes</a>
    </div>
    <div class="col-4 text-center">
        <a href="" class="btn btn-warning">Estancias</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4">
        <img src="http://192.168.200.23/trural/img/portada.jpg" class="img-fluid">
    </div>
    <div class="col-4">
        <img src="http://192.168.200.23/trural/img/clientes.jpg" class="img-fluid">

    </div>
    <div class="col-4">
        <img src="http://192.168.200.23/trural/img/estancias.jpg" class="img-fluid">
    </div>
</div>
<div class="row mt-3">
    <div class="col text-center">
        <img src="http://192.168.200.23/trural/img/almeria.jpg" class="img-fluid" width="600wx" height="650hx">
    </div>
</div>



</div>
@endsection