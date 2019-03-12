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

// Route::resource(
//     [
//         'Usuarios', 'UsuariosController'
//     ]
// );

Route::get('/usuarios', 'UsuariosController@index')->name('usuarios'); // Index
Route::get('/usuarios/crear', 'UsuariosController@create')->name('createUser'); //Crear
Route::post('usuarios/guardar/', 'UsuariosController@store')->name('save-user'); // Guardar 
Route::get('usuarios/{id}/edit', 'UsuariosController@edit')->name('edit-user'); // Editar 
Route::get('usuarios/{id}/ver', 'UsuariosController@show')->name('ver-user'); // Editar 
Route::get('usuarios/{id}/delete', 'UsuariosController@destroy')->name('delete-user'); // Editar 
Route::get('usuarios/{id}/', 'UsuariosController@update')->name('modificar-user'); // Editar 
Route::get('usuarios/{id}/changuepass', 'UsuariosController@password')->name('modificar-pass'); // Editar 
