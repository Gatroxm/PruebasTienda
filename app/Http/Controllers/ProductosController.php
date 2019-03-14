<?php

namespace Distry\Http\Controllers;

use Distry\Productos;
use Distry\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        $categorias = Categoria::all();
        return view('Productos.index', compact('productos', 'categorias'));
    }
    
    public function create()
    {
        $categorias = Categoria::all();
        return view('Productos.create',compact('categorias'));
    }

    public function store(Request $request)
    {
        $producto = new Productos;

        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/productos', $name);
            
        }

        $producto->name = $request->input('name');
        $producto->desciption = $request->input('desciption');
        $producto->precio = $request->input('precio');
        $producto->inventario = $request->input('inventario');
        $producto->unidad_medida = $request->input('unidad_medida');
        $producto->estado = $request->input('estado');
        $producto->id_categoria = $request->input('id_categoria');
        $producto->imagen = $name;

        $producto->save();

        return redirect()->route('productos');

    }
}
