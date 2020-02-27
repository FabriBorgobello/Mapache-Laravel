<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
  public function __construct()
  {
    //Usuarios middlewares
    $this->middleware('can:users.index')->only('index');

    $this->middleware('can:users.edit')->only('edit', 'update');

    $this->middleware('can:users.show')->only('show');

    $this->middleware('can:users.destroy')->only('destroy');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Mostrar lista de productos.
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */

    //Muestra el formulario para editar producto con los datos ya cargados.
    public function edit(User $user)
    {
      $roles = Role::get();

      return view('users.edit',compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */

    //Almacena las modificaciones a un producto ya existente.
    public function update(Request $request, User $user)
    {

      //actualizar Usuarios
      $user->update($request->all());
      //actualizar roles
      $user->roles()->sync($request->get('roles'));

     //redireccion
     return redirect('users')->with('Mensaje','Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */

    //Borra un usuario
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      return redirect('users')->with('Mensaje','Usuario eliminado con éxito');
    }
}
