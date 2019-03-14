<?php

namespace Distry\Http\Controllers;

use\Distry\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    
    public function index()
    {
        $categorias = Categoria::all();
        return view('Categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('Categoria.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria;
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/categorias', $name);
            
        }

        
        $categoria->name = $request->input('name');
        $categoria->descrition = $request->input('descrition');
        $categoria->imagen = $name;

        $categoria->save();

        return redirect()->route('categorias');

    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('Categoria.view', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('Categoria.edit', compact('categoria'));

    }

    public function update(Request $request, $id)
    {

        $categoria = Categoria::find($id);
        $categoria->name = $request->input('name');
        $categoria->descrition = $request->input('descrition');
        $categoria->imagen = $request->input('imagen');
        $categoria->save();

        return redirect()->route('categorias');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categorias');
    }
}
