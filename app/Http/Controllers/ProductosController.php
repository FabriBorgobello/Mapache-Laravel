<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{

  public function __construct()
  {
    //Productos middlewares
    $this->middleware('can:productos.create')->only('create', 'store');

    $this->middleware('can:productos.index')->only('index');

    $this->middleware('can:productos.edit')->only('edit', 'update');

    $this->middleware('can:productos.show')->only('show');

    $this->middleware('can:productos.destroy')->only('destroy');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Mostrar lista de productos.
    public function index()
    {
        $datos['productos'] = Productos::paginate(5);
        return view('productos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Muestra el formulario para crear nuevo producto.
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Almacena un nuevo producto en la base de datos.
    public function store(Request $request)
    {
        //Validación
        $validacion= [
            'Nombre'=>'required|string|max:200',
            'Descripcion'=>'string|max:200',
            'Precio'=>'required',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg,bmp'
        ];

        $mensaje=[
            "required"=>'El campo :attribute es requerido',
            "string"=>'El campo :attribute debe ser un string',
            "max"=>'El campo :attribute no debe superar los :max caracteres',
            "mimes"=>'La fotografía debe ser formato jpeg, png, jpg o bmp'
        ];

        $this->validate($request,$validacion,$mensaje);

        //Guardar en la variable $producto todos los datos del formulario, excepto el token (csrf_field)
        $datosProducto = request()->except('_token');
        //Almacenar Foto
        if($request->hasFile('Foto')){
            $datosProducto['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        Productos::insert($datosProducto);
        return redirect('productos')->with('Mensaje','Producto añadido exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */

    //Muestra el formulario para editar producto con los datos ya cargados.
    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */

    //Almacena las modificaciones a un producto ya existente.
    public function update(Request $request, $id)
    {
         //Guarda en la variable $producto todos los datos del formulario, excepto el token (csrf_field) y el método (method_field).
        $datosProducto = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            //Encontrar id y borrar fotografía anterior.
            $producto = Productos::findOrFail($id);
            Storage::delete('public/'.$producto->foto);

            //Guardar fotografía nueva.
            $datosProducto['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        //Encontrar producto por id.
        Productos::where('id', '=', $id)->update($datosProducto);

        //Si queremos mostrar formulario con nuevos datos.
        // $producto = Productos::findOrFail($id);
        // return view('productos.edit',compact('producto'));

        //Si queremos volver a la lista de productos.
        return redirect('productos')->with('Mensaje','Producto modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */

    //Borra un producto (cambia el valor del campo "Borrado" a 1).
    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
        if($producto->borrado){
            $producto->borrado = 0;
            $notificacion = 'Producto restaurado exitosamente';
        }else{
            $producto->borrado = 1;
            $notificacion = 'Producto archivado exitosamente';
        }

        $producto->save();

        return redirect('productos')->with('Mensaje',$notificacion);
    }
}
