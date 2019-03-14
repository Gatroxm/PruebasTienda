@extends('layouts.app')

@section('title', $usuario->name)
@section('content')

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="text-center mt-5 mb-5">Detalle de usuario</h1>
        </div>
        <div class="col text-center">
            <img src="{{asset('imagenes/avatars')}}/{{ $usuario->avatar }}" alt="" class="img-fluid">
        </div>
        <div class="col">
            <p><strong>Nonmbre:</strong> <span>{{ $usuario->name }} {{ $usuario->apellido }}</span></p>
            <p><strong>Nonmbre del restaurante:</strong> <span>{{ $usuario->restauranteName }}</span></p>
            <p><strong>Correo:</strong> <span>{{ $usuario->correo }}</span></p>
            <div class="text-left">
                <a href="{{ route('edit-user', $usuario->id) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('delete-user', $usuario->id) }}" class="btn btn-danger">Eliminar</a>
                <a href="{{ route('usuarios') }}" class="btn btn-success">Atras</a>
            </div>
        </div>
    </div>

@endsection