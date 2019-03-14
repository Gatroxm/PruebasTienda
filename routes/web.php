<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Ruras de los usuarios */

Route::get('usuarios', 'UsuariosController@index')->name('usuarios'); // Index
Route::get('usuarios/crear', 'UsuariosController@create')->name('createUser'); //Crear
Route::post('usuarios/guardar/', 'UsuariosController@store')->name('save-user'); // Guardar 
Route::get('usuarios/{id}/edit', 'UsuariosController@edit')->name('edit-user'); // Editar 
Route::get('usuarios/{id}/ver', 'UsuariosController@show')->name('ver-user'); // Editar 
Route::get('usuarios/{id}/delete', 'UsuariosController@destroy')->name('delete-user'); // Editar 
Route::get('usuarios/{id}/', 'UsuariosController@update')->name('modificar-user'); // Editar 
Route::get('usuarios/{id}/changuepass', 'UsuariosController@password')->name('modificar-pass'); // Editar 

/* Rutas categorías */

Route::get('categorias', 'CategoriasController@index')->name('categorias'); //Index
Route::get('categorias/crear', 'CategoriasController@create')->name('createUCategoria'); //Crear
Route::post('categorias/guardar', 'CategoriasController@store')->name('save-categoria'); // Guardar
Route::get('categorias/{id}/edit', 'CategoriasController@edit')->name('edit-categoria'); // Editar 
Route::get('categorias/{id}/ver', 'CategoriasController@show')->name('ver-categoria'); // Edita
Route::get('categorias/{id}/', 'CategoriasController@update')->name('modificar-categoria'); // Editar
Route::get('categorias/{id}/delete', 'CategoriasController@destroy')->name('delete-categoria'); // Editar 

/* Rutas Productos */
Route::get('productos', 'ProductosController@index')->name('productos'); //Index
Route::get('productos/crear', 'ProductosController@create')->name('createProducto'); //Crear
Route::post('productos/guardar', 'ProductosController@store')->name('save-producto'); // Guardar
Route::get('productos/{id}/edit', 'ProductosController@edit')->name('edit-producto'); // Editar 
Route::get('productos/{id}/ver', 'ProductosController@show')->name('ver-producto'); // Edita
Route::get('productos/{id}/', 'ProductosController@update')->name('modificar-producto'); // Editar
Route::get('productos/{id}/delete', 'ProductosController@destroy')->name('delete-producto'); // Editar 