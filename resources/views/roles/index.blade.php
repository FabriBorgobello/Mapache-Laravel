@extends('layouts.app')
@section('content')

<div class="container">


<h1 class="text-center">Panel de control de roles</h1>

<!-- Mostrar mensaje de agregado/modificado correctamente. -->
@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{  Session::get('Mensaje') }}
    </div>
@endif
@can('roles.create')
<a href="{{ url('roles/create')}}" class="btn btn-success">Agregar rol</a>
@endcan
<br>
<br>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Rol</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
                <td>
                <!-- Botón editar -->
                @can('roles.edit')
                <a class="btn btn-warning" href="{{route('roles.edit', $role->id)}}">Editar</a>
                @endcan
                @can('roles.destroy')
                  <!-- Botón eliminar -->
                <form method="post" action="{{route('roles.destroy', $role->id)}}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea quitar este rol al usuario?');">Eliminar</button>
                </form>
                @endcan
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Paginador -->
    {{ $roles->links() }}
</div>

@endsection
