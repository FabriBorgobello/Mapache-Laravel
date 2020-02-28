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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Crea todas las rutas referidas a PRODUCTOS (Create, Edit, Delete, etc.)
Route::middleware(['auth'])->group(function(){
  //Roles
  Route::resource('roles', 'RoleController');
  //Productos
  Route::resource('productos', 'ProductosController');
  //Usuarios
  Route::resource('users', 'UserController');

});

Route:: get('/contacto', function(){
  return view('contacto');
});
Route:: get('/faqs', function(){
  return view('faqs');
});


// Carrito

Route::

?>
