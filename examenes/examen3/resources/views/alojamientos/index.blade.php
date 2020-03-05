@extends('plantillas.plantilla')
@section('titulo')
    Alojamiento
@endsection
@section('cabecera')
    ALOJAMIENTOS
@endsection
@section('contenido')
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<div class="container mt-3">
    <a href="#" onclick="return alert('Metodo no creado')" class="my-3 btn btn-info"><i class="fa fa-plus"></i>  Crear Alojamiento</a>
    <a href="{{route('clientes.index')}}" class="my-3 btn btn-warning"><i class="fas fa-concierge-bell"></i>&nbsp;Gestión Clientes</a>
    <a href="{{route('index')}}" class="my-3 btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <form name="search" method="get" action="{{route('clientes.index')}}" class="form-inline float-right my-3">
        <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i> <span class="normal mr-1"> Apellidos:</span>
        <select name='provincias' class='form-control mr-2' onchange="this.form.submit()">
            <option value='%'>Todos</option>
            @foreach ($provincias as $provincia){
                @if ($provincia==$request->provincias)
                <option selected>{{$provincia}}</option>                    
                @else
                <option>{{$provincia}}</option>
                @endif
            } 
            @endforeach
        </select>
        <input type="submit" value="Buscar" class="btn btn-info ml-2">
    </form>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col" class="normal text-info font-weight-bold">Detalles</th>
            <th scope="col" class="normal text-info font-weight-bold ">Nombre</th>
            <th scope="col" class="normal text-info font-weight-bold">Provincia</th>
            <th scope="col" class="normal text-info font-weight-bold text-nowrap">Teléfono (<i class="fa fa-phone"
                                                                                               aria-hidden="true"></i>
                )
            </th>
            <th scope="col" class="normal text-center text-info font-weight-bold">Descripcion</th>
            <th scope="col" class="normal text-info font-weight-bold">Acciones <i class="fas fa-cogs"></i></th>
        </tr>
        </thead>
        <tbody> 
            @foreach ($alojamientos as $alojamiento)
                <tr>
                    <th scope="row" class="align-middle"><a href="" onclick="return alert('Metodo no creado')"
                        class="fa fa-address-card fa-2x btn btn-success"></a></th>
                    <th scope="row" class="align-middle text-nowrap normala">{{$alojamiento->nombre}}</th>
<th scope="row" class="align-middle text-nowrap normala">{{$alojamiento->provincia}}</th>
<th scope="row" class="align-middle text-nowrap normala">{{$alojamiento->telefono}}</th>
<th scope="row" class="align-middle normala">{{$alojamiento->descripcion}}</th>
<th scope="row" class="align-middle">
<form class="form-inline text-nowrap d-inline">

<button type="submit" onclick="return alert('Metodo no creado')"
class=" btn btn-danger fa fa-trash fa-2x"></button>
<a href="#" onclick="return alert('Metodo no creado')" style="text-decoration: none"
class="ml-2 fa fa-edit fa-2x btn btn-warning"></a>
</form>
</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alojamientos->fragment('foo')->links() }}
</div>
@endsection