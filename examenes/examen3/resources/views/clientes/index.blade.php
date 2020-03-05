@extends('plantillas.plantilla')
@section('titulo')
    Clientes
@endsection
@section('cabecera')
    Clientes
@endsection
@section('contenido')
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<div class="container mt-3">
    <a href="{{route('clientes.create')}}" class="my-3 btn btn-info"><i class="fa fa-plus"></i>  Nuevo Cliente</a>
    <a href="{{route('alojamientos.index')}}" class="my-3 btn btn-warning"><i class="fas fa-concierge-bell"></i>&nbsp;Ver Alojamientos</a>
    <a href="{{route('index')}}" class="my-3 btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
    <form name="search" method="get" action="{{route('clientes.index')}}" class="form-inline float-right my-3">
        <i class="fa fa-search fa-2x ml-2 mr-2" aria-hidden="true"></i> <span class="normal mr-1"> Apellidos:</span>
        <select name='apellidos' class='form-control mr-2' onchange="this.form.submit()">
            <option value='%'>Todos</option>
            @foreach ($opciones as $index=>$value){
                @if ($index+1==$request->apellidos)
                <option value={{$index+1}} selected>{{$value}}</option>                    
                @else
                <option value={{$index+1}}>{{$value}}</option>
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
            <th scope="col" class="normal text-info font-weight-bold ">Nombre <i class="fas fa-user-friends"></i></th>
            <th scope="col" class="normal text-info font-weight-bold">mail <i class="fas fa-envelope"></i></th>
            <th scope="col" class="normal text-info font-weight-bold text-nowrap">Foto <i class="fas fa-camera"></i></th>
            <th scope="col" class="normal text-info font-weight-bold">Acciones <i class="fas fa-cogs"></i></th>
        </tr>
        </thead>
        <tbody> 
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row" class="align-middle"><a href="{{route('clientes.show', $cliente)}}"
                        class="fa fa-address-card fa-2x btn btn-success"></a></th>
                    <th scope="row" class="align-middle text-nowrap normala">{{$cliente->apellidos}}, {{$cliente->nombre}}</th> 
                    <th scope="row" class="align-middle text-nowrap normala">{{$cliente->mail}}</th>
                    <th scope="row" class="align-middle text-nowrap normala"><img src="{{asset($cliente->perfil)}}" class="img-fluid rounded-circle" width="90vw" height="90vh"></th>
                    <th scope="row" class="align-middle">
                        <form class="form-inline text-nowrap d-inline" name="del" action="{{route('clientes.destroy', $cliente)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" onclick="return confirm('¿Borrar Cliente??')" class=" btn btn-danger fa fa-trash fa-2x"></button>
                        <a href="{{route('clientes.edit', $cliente)}}" style="text-decoration: none" class="ml-2 fa fa-edit fa-2x btn btn-warning"></a>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $clientes->fragment('foo')->links() }}
</div>
@endsection