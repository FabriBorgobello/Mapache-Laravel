<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Marca;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
  public function index()
  {
    $datos['productos'] = Producto::all();
    return view('welcome', $datos);
  }
    //
}
