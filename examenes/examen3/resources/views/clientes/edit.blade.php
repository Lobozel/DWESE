@extends('plantillas.plantilla')
@section('titulo')
    Actualizar Cliente
@endsection
@section('cabecera')
    Datos Cliente
@endsection
@section('contenido')
<div class="container mt-3">	
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
    <div class="card bg-secondary">
<div class="card-header h3">Formulario</div>
<div class="card-body">
    <form name="da" action="{{route('clientes.update', $cliente)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
            <div class="form-row">
            <div class="col">
                <label for="nom" class="col-form-label">Nombre <i class="fa fa-users"></i></label>
            <input type="text" class="form-control" value="{{$cliente->nombre}}" placeholder="Nombre"
                       name="nombre" id="nom" required>
            </div>
            <div class="col">
                <label for="ape" class="col-form-label">apellidos <i class="fa fa-users"></i></label>
            <input type="text" class="form-control" value="{{$cliente->apellidos}}" placeholder="Apellidos"
                       name="apellidos" id="ape" required>
            </div>
        </div>
            <div class="form-row">
                <div class="col">
                    <label for="mi" class="col-form-label">Mail <i
                            class="fas fa-envelope-open-text"></i></label>
                    <input type="email" class="form-control" name="mail" id="mi" value="{{$cliente->mail}}" required>
                </div>
                <div class="col">
                    <label for="logo" class="col-form-label">Foto Perfil  <i class="fa fa-portrait"></i></label>
                    <input type="file" class="form-control p-1" name="perfil" accept="image/*">
                </div>
                <div class="col-2 mt-3">
                    <img src="{{asset($cliente->perfil)}}" class="img-fluid" width="80wx"  height="80hx">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col">
                    <input type="submit" value="Editar" class="btn btn-success mr-2">
                    <a href="{{route('clientes.index')}}" class="btn btn-info">Volver</a>
                </div>
            </div>
    </form>
</div>
</div>
</div>
@endsection