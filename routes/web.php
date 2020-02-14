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

//Crea todas las rutas referidas a PRODUCTOS (Create, Edit, Delete, etc.)
Route::resource('productos', 'ProductosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>