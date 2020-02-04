@extends('plantillas.plantilla')
@section('titulo')
Detalle Coche
@endsection
@section('cabecera')
Detalles Coche Matriicula <i><b>{{($coch->matricula)}}</b></i>
<a href="{{route('coches.index')}}" class='ml-3 btn btn-success'>Volver</a>
@endsection
@section('contenido')
<div class="container border border-primary p-5">
<p class="font-weight-bold ml-3">Matricula: {{$coch->matricula}}</p>
<p class="font-weight-bold ml-3 my-5">Marca: {{$coch->marca->nombre}}
<img src="{{asset($coch->marca->logo)}}" width="30vw" height="30vh" class='ml-5 rounded-circle'></p>
<p class="font-weight-bold ml-3">País: {{$coch->marca->pais}}</p>
<div class="border border-success p-5">
<table class='ml-3' cellspacing='6' cellpadding='5'>
    <tr>
        <td>
            <p class="font-weight-bold ml-3">Modelo: {{$coch->modelo}}</p>
        </td>
        <td rowspan='5'>
        <img src="{{asset($coch->foto)}}" width="180vw" height="180vh">
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-weight-bold ml-3">Color: {{$coch->color}}</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-weight-bold ml-3">Tipo: {{$coch->tipo}}</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-weight-bold ml-3">PVP(€): {{$coch->pvp}}</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-weight-bold ml-3">Kilómetros: {{$coch->klms}}</p>
        </td>
    </tr>
</table>
</div>
</div>
@endsection