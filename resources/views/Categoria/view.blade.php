@extends('layouts.app')

@section('title', 'Crear Categorías')
@section('content')
    <div class="row">
        <div class="col">
            <div class="m-5 text-center">
                    <img src="{{ asset('imagenes/categorias')}}/{{$categoria->imagen}}" alt="" class="img-responsive">
                    <h5 class="text-center mt-5 mb-5">{{$categoria->name}}</h5>
                    <p class="text-justify mb-5">{{ $categoria->descrition }}</p>
                    <a href="{{ route('categorias') }}" class="btn btn-success">atras</a>
            </div>
        </div>
    </div>
@endsection