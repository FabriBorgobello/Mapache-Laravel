@extends('layouts.app')
@section('title')
Contactanos
@endsection
@section('content')
<div class="todo letra">

  <div class="container">
    <div class="todo letra">
      <h2>Completá tus datos</h2><br>
        <div class="centrar col-lg-6">
          <div class="cuadro">
            <form method="POST" action="{{ route('register') }}">
                @csrf

              <div class="row">
                <div class="col-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir Contraseña">
                </div>
              </div>
          </div>
            <div class="boton mt-5">
                <button type="submit" class="btn btn-primary">
                    {{ __('Crear cuenta') }}
                </button>
            </div>

            </form>

        </div>

    </div>
  </div>

@yield('footer')

  </body>
</html>
@endsection
