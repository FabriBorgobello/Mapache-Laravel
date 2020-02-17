@extends('layouts.app')
@section('title')
  Bienvenido
@endsection
@section('content')
<div class="container"><div class="todo-letra">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header center todo-letra">
                  <h1>Bienvenido</h1>
                  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>  ¡Ingresaste a Mapache!</p>

                </div>
            </div>
        </div>
    </div>
      </div>
</div>
@endsection
