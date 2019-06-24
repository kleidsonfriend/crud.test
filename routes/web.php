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

// routes for usuarios.
Route::group(array('prefix' => 'usuarios'), function()
{
Route::get('/', 'UsuariosController@index');
Route::get('/add', 'UsuariosController@add');
Route::post('/add-post', 'UsuariosController@addPost');
Route::get('/delete/{id}', 'UsuariosController@delete');
Route::get('/edit/{id}', 'UsuariosController@edit');
Route::post('/edit-post', 'UsuariosController@editPost');
Route::get('/change-status/{id}', 'UsuariosController@changeStatus');
Route::get('/view/{id}', 'UsuariosController@view');
});
// end of usuarios routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
