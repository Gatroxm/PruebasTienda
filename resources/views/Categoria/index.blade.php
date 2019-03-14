@extends('layouts.app')

@section('title', 'Crear Categorías')
@section('content')

    <div class="m-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="text-center m-5 mb-7">Listado de Categorías</h1>
                <div class="text-right mb-5">
                    <a href="{{route('createUCategoria')}}" class="btn btn-success">Crear Categorías </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>imagen</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <body>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>
                                    <img src="{{ asset('imagenes/categorias')}}/{{$categoria->imagen}}" alt="" class="img-tablas">
                                </td>
                                <td>{{$categoria->name}}</td>
                                <td>
                                    <p class="text-justify">{{ str_limit($categoria->descrition, 100 ) }}</p>
                                </td>
                                <td>
                                        <a href="{{ route('edit-categoria', $categoria->id) }}" class="btn btn-primary">Editar</a>
                                        <a href="{{ route('ver-categoria', $categoria->id) }}" class="btn btn-success">Ver</a>
                                        <a href="{{ route('delete-categoria', $categoria->id) }}" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
    </div>

@endsection