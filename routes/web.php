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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
	return view('login');
});

Route::get('/home',function(){
	return view('index');
});
*/

Route::get('login','Auth\LoginController@getLogin');
Route::post('login','Auth\LoginController@postLogin')->name('login');
Route::get('logout','Auth\LoginController@getLogout')->name('logout');

Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register',  'Auth\RegisterController@postRegister')->name('auth/register');

Route::get('/','HomeController@index');
Route::get('home','HomeController@index');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('form_nuevo_usuario', 'FormulariosController@form_nuevo_usuario');
Route::post('agregar_nuevo_usuario', 'UsuariosController@agregar_nuevo_usuario');

Route::get('listado_usuarios/{page?}', 'ListadoController@listado_usuarios');
