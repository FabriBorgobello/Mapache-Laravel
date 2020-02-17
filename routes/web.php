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
Auth::routes(); // autenticacion de uss

//VISITANTE: registrase, index, productos
Route::get('/','ProductosController@getIndex');

Route:: get('/faqs', function(){
  return view('faqs');
});

Route:: get('/contacto', function(){
  return view('contacto');
});


//LOGEADOS: perfil de uss, carrito, agregar prod al carro, concretar compra, eliminar prod carro


//ADMIN: abm productos, dar permisos?
//Crea todas las rutas referidas a PRODUCTOS (Create, Edit, Delete, etc.)
Route::resource('productos', 'ProductosController');

//-------------------------------------
Route::get('/', function () {
    return view('/welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

?>
