<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Providers;


use App\Producto;
use App\Categoria;
use App\Marca;
use Illuminate\Support\Facades\Storage;


class CarroController extends Controller
{
  public function __construct(){
    //creo una variable de session de carro si no existe
    if(!\Session::has('carro'))\Session::put('carro',array());
  }
    //mostrar CarroController
    public function show()
    {
      // muestra la variable de session yse mantiene actualizada
      $carro= \Session::get('carro');
      $total=$this->total();
      return view('carro',compact('carro','total'));
    }
    //agregar item
    public function add(Producto $producto)
    {
      $carro= \Session::get('carro');
      $producto->cantidad=1;
      $carro[$producto->id]=$producto;
      \Session::put('carro',$carro); //actualizo la variable de session
      return redirect()->route('carro-show');
    }

    //quitar item
    public function delete(Producto $producto)
    {
      $carro= \Session::get('carro');//aaray c todos los item
      unset($carro[$producto->id]);//elimina el item id
      \Session::put('carro',$carro);
      return redirect()->route('carro-show');
    }

    //actualizar item
    public function update(Producto $producto, $cantidad)
    {
      $carro= \Session::get('carro');
      $carro[$producto->id]->cantidad= $cantidad;
      \Session::put('carro',$carro);
      return redirect()->route('carro-show');
    }

    //vaciar carro
    public function vaciar($value='')
    {
       \Session::forget('carro');
        return redirect()->route('carro-show');
    }
    //total a pagar
    private function total()
    {
        $carro= \Session::get('carro');
        $total=0;
        foreach ($carro as $item) {
          $total+=$item->precio * $item->cantidad;
        }

      return $total;
    }

}
