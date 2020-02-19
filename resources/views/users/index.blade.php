@extends('layouts.app')
@section('content')

<div class="container">


<h1 class="text-center">Panel de control de usuarios</h1>

<!-- Mostrar mensaje de agregado/modificado correctamente. -->
@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
    {{  Session::get('Mensaje') }}
    </div>
@endif

<br>
<br>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <!-- Botón editar -->
                @can('users.edit')
                <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">Editar</a>
                @endcan
                @can('users.destroy')
                  <!-- Botón eliminar -->
                <form method="post" action="{{route('users.destroy', $user->id)}}" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar definitivamente este usuario?');">Eliminar</button>
                </form>
                @endcan
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Paginador -->
    {{ $users->links() }}
</div>

@endsection
