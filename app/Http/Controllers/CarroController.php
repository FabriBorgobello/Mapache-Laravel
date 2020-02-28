<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
  public function __construct(){
    //creo una variable de session de carro si no existe
    if(!\Session::has('carro'))\Session::put('carro',array());
  }
    //mostrar CarroController
    public function show()
    {
      // se mantiene actualizada
      return \Session::get('carro');
    }
    //agregar item
    public function add($value='')
    {
      // code...
    }

    //quitar item
    public function FunctionName($value='')
    {
      // code...
    }

    //actualizar item
    public function FunctionName($value='')
    {
      // code...
    }

    //vaciar carro
    public function FunctionName($value='')
    {
      // code...
    }
    //total a pagar
    public function FunctionName($value='')
    {
      // code...
    }
}
