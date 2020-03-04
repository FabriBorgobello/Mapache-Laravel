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
Route:: get('/', 'catalogoController@index');

Route:: get('/producto/{id}', [
    'as'=>'producto-detalle',
    'uses'=>'catalogoController@show']);

// Carrito
Route::bind('producto',function($id){
      return App\Producto::where('id',$id)->first();
}); //para buscar producto por id

Route::get('carro/show',[
    'as'=> 'carro-show',
    'uses'=>'CarroController@show'
]); //

Route::get('carro/add/{producto}',[
    'as'=> 'carro-add',
    'uses'=>'CarroController@add'
]);
Route::get('carro/delete/{producto}',[
    'as'=> 'carro-delete',
    'uses'=>'CarroController@delete'
]);

Route::get('carro/vaciar',[
    'as'=> 'carro-vaciar',
    'uses'=>'CarroController@vaciar'
]);
Route::get('carro/update/{producto}/{cantidad?}',[
    'as'=> 'carro-update',
    'uses'=>'CarroController@update'
]);
?>
