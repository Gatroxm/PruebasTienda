<?php

namespace Distry\Http\Controllers;

use Distry\Usuario;
use Illuminate\Http\Request;
use Distry\Http\Requests\CreateUserRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('Users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/avatars', $name);
        } else{
            $name = "noavatar.png";
        }

        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->apellido = $request->input('apellido');
        $usuario->restauranteName = $request->input('restauranteName');
        $usuario->correo = $request->input('correo');
        $usuario->avatar = $name;
        $usuario->password = encrypt($request->input('password'));

        $usuario->save();

        return redirect()->route('usuarios');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('Users.view', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('Users.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuario = Usuario::find($id);
        $usuario->name = $request->input('name');
        $usuario->apellido = $request->input('apellido');
        $usuario->restauranteName = $request->input('restauranteName');

        $usuario->save();
        return redirect()->route('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuarios');
    }

    public function password(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $password = decrypt($usuario->password);

        if($password === $request->input('password2')){
            return "igules";
        }else{
            $usuario->password = encrypt($request->input('password2'));
            $usuario->save();
            return redirect()->route('usuarios');
        }
    }
}
