@extends('layouts.app')

@section('title', 'Crear Usuario')

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

        <form action="{{ route('save-user') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="restauranteName">Nombre del restaurante</label>
                <input type="text" class="form-control" name="restauranteName" placeholder="Nombre del restaurante">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" placeholder="correo">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar">
            </div>
            <div class="form-group text-center">
            <Button class="btn btn-info">Crear Cuenta</Button>
            </div>
        </form>
    </div>
@endsection