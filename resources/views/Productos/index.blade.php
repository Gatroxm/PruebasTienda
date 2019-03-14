@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<div class="m-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-2">Nuestros productos</h1>
            <div class="mb-5 text-right">
                    <a href="{{ route('createProducto') }}" class=" btn btn-outline-success">Crear Ususarios</a>
                </div>
            @foreach ($productos as $producto)
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mt-2">
                    <div class="card">
                    <img src="{{asset('imagenes/productos')}}/{{ $producto->imagen }}" class="card-img-top" alt="..."> 
                        <div class="card-body">
                            <h5 class="card-title">{{  $producto->name  }} </h5>
                            
                            <div class="text-center">
                            <span>Precio: <strong>{{ $producto->precio}}</strong></span><br>
                            <span>Categoría: <strong>
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->id == $producto->id_categoria)
                                        <a href="{{ route('ver-categoria', $producto->id_categoria)}}">{{$categoria->name}}</a>
                                    @endif
                                @endforeach
                            </strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection