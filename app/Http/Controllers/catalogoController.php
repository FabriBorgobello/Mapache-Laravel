<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Providers;


use App\Producto;
use App\Categoria;
use App\Marca;
use Illuminate\Support\Facades\Storage;

class catalogoController extends Controller
{
    public function index()
    {
        $productos=Producto::all();
      return view('/welcome',compact('productos'));
    }
    public function show($id){
        $productos=Producto::where('id',$id)->first();
        return view('detalleProducto',compact('productos'));
    }
}
