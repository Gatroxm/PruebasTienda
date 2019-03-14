@extends('layouts.app')

@section('title', 'Crear Categorías')
@section('content')

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="text-center m-5">Crear categoría</h1>
            <div class="text-center">
                    <img src="{{ asset('imagenes/categorias')}}/{{$categoria->imagen}}" alt="" class="img-edit">
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <form class="m-5" action="{{ route('modificar-categoria', $categoria->id) }}" method="PUT">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ $categoria->name }}">
                </div>
                <div class="form-group">
                    <label for="descrition">Descripción</label>
                    <textarea name="descrition" id="" class="form-control" cols="30" rows="10" placeholder="Escribe aquí la descrición de la categría">
                        {{ $categoria->descrition }}
                    </textarea>
                </div>
            <input type="hidden" name="imagen" value="{{ $categoria->imagen }}">
                <div class="form-group text-center">
                    <Button class="btn btn-info">Editar Categoría</Button>
                </div>
            </form>
        </div>
    </div>
@endsection