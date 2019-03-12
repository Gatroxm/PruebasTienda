@extends('layouts.app')

@section('title', $usuario->name)
@section('content')
    <div class="m-2">
        <h1 class="text-center">CREAR UN NUEVO USUARIO</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form  action="{{ route('modificar-user', $usuario->id) }}" method="PUT" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{$usuario->name}}">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}">
            </div>
            <div class="form-group">
                <label for="restauranteName">Nombre del restaurante</label>
                <input type="text" class="form-control" name="restauranteName" placeholder="Nombre del restaurante" value="{{$usuario->restauranteName}}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" placeholder="correo" value="{{$usuario->correo}}" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar">
            </div>
            <div class="form-group text-center">
            <Button class="btn btn-info">Editar Usuario</Button>
            </div>
        </form>
        <h2>Modificar contraseña</h2>
        <form  action="{{ route('modificar-pass', $usuario->id) }}" method="PUT">

            <div class="form-group">
                <label for="password">Contraseña Actual</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña Actual">
            </div>
            <div class="form-group">
                <label for="password2">Nueva Contraseña</label>
                <input type="text" class="form-control" name="password2" placeholder="password2">
            </div>
            <div class="form-group text-center">
            <Button class="btn btn-info">Editar Contraseña</Button>
            </div>
        </form>
    </div>
@endsection