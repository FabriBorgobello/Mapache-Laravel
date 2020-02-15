<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@include('header_y_footer')
@yield('header')
<link rel="stylesheet" href="{!! asset('css/style.css') !!}">

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login - Mapache</title>
</head>
<body>

  <div class="container-fluid">
    <div class="container">
      <div class="todo letra">


          <h2>Ingresá con tu email y contraseña</h2><br>
          <div class="centrar col-lg-6">
            <div class="cuadro">
              <form class="" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12 mt-3">
                  <div class="">
                      <input class="form-check-input ml-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label ml-4" for="remember">
                          {{ __('Recordarme') }}
                      </label>
                  </div>
              </div>
              <div class="col-12 mt-4">
                <div class="boton">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Ingresar') }}
                  </button>
                </div>
                <div class="cuenta col-lg-8">
                  @if (Route::has('password.request'))
                      <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                          {{ __('¿Olvidaste tu contraseña?') }}
                      </a>
                  @endif
                </div>
              </div>
            </div>



          </div>
            </form>

        </div>
      </div>
    </div>
  </div>
</body>
</html>

@yield('footer')
