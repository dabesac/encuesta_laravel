<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\User;
Route::get('/', 'PrincipalController@index');


// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('login','LoginController');
Route::resource('usuario','UsuarioController');
Route::get('usuariocreate','UsuarioController@create');
Route::post('/password','UsuarioController@password');

Route::get('/desact/{id}','UsuarioController@desact');

//Route::post('usuariostore','UsuarioController@store');


Route::get('logout','LoginController@logout');


Route::resource('encuesta','PollController');
Route::get('encuestaedit/{id}', 'PollController@editarencuesta');
Route::get('encuestaview/{id}', 'PollController@view');
Route::get('encuestadestroy/{id}', 'PollController@destroy');