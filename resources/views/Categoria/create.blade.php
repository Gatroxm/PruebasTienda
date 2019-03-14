@extends('layouts.app')

@section('title', 'Crear Categorías')
@section('content')

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="text-center m-5">Crear categoría</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <form class="m-5" action="{{ route('save-categoria') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="descrition">Descripción</label>
                    <textarea name="descrition" id="" class="form-control" cols="30" rows="10" placeholder="Escribe aquí la descrición de la categría"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">imágen Categoría</label>
                    <input type="file" name="imagen">
                </div>
                <div class="form-group text-center">
                    <Button class="btn btn-info">Crear Categoría</Button>
                </div>
            </form>
        </div>
    </div>
@endsection