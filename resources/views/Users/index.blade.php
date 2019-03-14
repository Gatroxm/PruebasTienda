@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <h1 class="text-center">Listado de usuarios</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
            <a href="{{ route('createUser') }}" class=" btn btn-outline-success">Crear Ususarios</a>
        </div>
    @foreach ($usuarios as $usuario)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mt-2">
            <div class="card">
            <img src="{{asset('imagenes/avatars')}}/{{ $usuario->avatar }}" class="card-img-top" alt="..."> 
                <div class="card-body">
                    <h5 class="card-title">{{  $usuario->name  }} {{ $usuario->apellido }}</h5>
                    <p class="card-text"><strong>Restaurante:</strong> {{$usuario->restauranteName }}</p>
                    <p class="card-text"><strong>Correo:</strong> {{$usuario->correo }}</p>
                    <div class="text-center">
                        <a href="{{ route('edit-user', $usuario->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('ver-user', $usuario->id) }}" class="btn btn-success">Ver</a>
                        <a href="{{ route('delete-user', $usuario->id) }}" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection