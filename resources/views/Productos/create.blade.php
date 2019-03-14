@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<div class="m-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1 class="text-center m-5">Crear Producto</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <form class="m-5"  action="{{ route('save-producto') }}"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="desciption">Descripción</label>
                    <textarea name="desciption" id="" class="form-control" cols="30" rows="5" placeholder="Escribe aquí la descrición de la categría"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagen">imágen  </label>
                    <input type="file" name="imagen">
                </div>
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="text" name="precio" class="form-control" placeholder="Precio">
                </div>
                <div class="for-group">
                    <label for="inventario">Inventario</label>
                    <input type="text" class="form-control" name="inventario" placeholder="Inventario">
                </div>
                <div class="form-group">
                    <label for="unidad_medida">Unidad de medida</label>
                    <select name="unidad_medida" id="" class="form-control">
                        <option value="Kilos">Kilos</option>
                        <option value="Gramos">Gramos</option>
                        <option value="Litros">Litros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="estado">estado</label>
                    <select name="estado" id="" class="form-control">
                        <option value="1">activo</option>
                        <option value="0">no-activo</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="id_categoria">Categoría</label>

                        <select name="id_categoria" id="" class="form-control">
                                <option >Selecciona Una categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{$categoria->name}}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group text-center">
                    <Button class="btn btn-info">Crear Producto</Button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection