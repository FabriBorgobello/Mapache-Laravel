@extends('layouts.app')
@section('title')
  ABM PRODUCTOS
@endsection
@section('content')

<div class="container">
  <div class="todo letra">

<h1 class="text-center">Panel de control de productos</h1>

<!-- Mostrar mensaje de agregado/modificado correctamente. -->
@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{  Session::get('Mensaje') }}
    </div>
@endif

<a href="{{ url('productos/create')}}" class="btn btn-success">Agregar Producto</a>
<br>
<br>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Estado</th>
                <!-- <th>Marca</th>
                <th>Categoria</th> -->
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td><?php echo number_format((float)$producto->precio, 2, '.', '');?></td>
                <!-- Para mostrar la imagen se debe ejecutar el comado 'php artisan storage:link' -->
                <td><img src="{{ asset('storage'). '/' . $producto->foto}}" class="img-thumbnail img-fluid" alt="" width="100"></td>
                <td>
                    @if ($producto->borrado)
                        <span class="badge badge-pill badge-danger">Archivado</span>
                    @else
                        <span class="badge badge-pill badge-success">En Stock</span>
                    @endif
                </td>
                <!-- <td>{{$producto->marca}}</td>
                <td>{{$producto->categoria}}</td> -->
                <td>
                <!-- Botón editar -->
                <a class="btn btn-warning" href="{{url('/productos/'.$producto->id.'/edit')}}">Editar</a>

                <!-- Botón eliminar -->
                @if ($producto->borrado)
                    <form method="post" action="{{url('/productos/'.$producto->id)}}" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-success" onclick="return confirm('¿Desea restaurar este producto?');">Restaurar</button>
                    </form>
                @else
                    <form method="post" action="{{url('/productos/'.$producto->id)}}" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea archivar este producto?');">Archivar</button>
                    </form>
                @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Paginador -->
    {{ $productos->links() }}
</div>
</div>

@endsection
