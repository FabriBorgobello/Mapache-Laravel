<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <title>@yield('title')</title>
</head>
<body>
  <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
  <header>
    <div class="container-fluid sinMargen">
      <div class="row" id="buscador">
        <div class="nombre text-white col-sm-12 col-md-5 col-lg-5 ">
          <a href="/">
          <img id="logodepagina" src="{{asset('img/Logo-Mapache.png')}}" alt="logo">

          <h1 id= "titulodepagina">Mapache</h1></a>
        </div>

        <div class="buscar col-sm-12 col-md-5 col-lg-5">
          <form class="form-inline d-flex justify-content-center" >
            <input class="rounded-pill" type="search" aria-label="Search" id="inputBuscador">
            <button id= "botBuscar" class="btn btn-outline-success rounded-pill" type="submit">Buscar</button>
          </form>
        </div>

        <div class="col-sm-12 col-md-2 col-lg-2">
          <div class="carrito">
              <a href="carrito.php"><i class="fas fa-cart-arrow-down"></i></a>
          </div>
          <div id="misCompras">
            <a class="text-white" href="carrito.php">Mis compras</a>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-sm" id=barraNav>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#opciones">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="opciones">
          <ul class="navbar-nav largoBarra" id=barraNav>
            <li class="nav-item col-sm-12 col-md-3 col-lg-3">
              <a class="nav-link text-center text-white" href="/">Home</a>
            </li>
            <li class="nav-item dropdown col-sm-12 col-md-3 col-lg-3">
              <a class="nav-link dropdown-toggle text-center text-white" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  Productos         </a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="index.php#categorianotebooks">Notebooks</a>
                <a class="dropdown-item" href="index.php#categoriapcdeescritorio">PC de Escritorio</a>
                <a class="dropdown-item" href="index.php#categoriateclados">Teclados</a>
              </div>
            </li>

              @guest
                  <li class="nav-item col-sm-12 col-md-3 col-lg-3">
                      <a class="nav-link text-center text-white" href="{{ route('login') }}">{{ __('Ingresá') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item col-sm-12 col-md-3 col-lg-3">
                          <a class="nav-link text-center text-white" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                      </li>
                  @endif
              @else
                <li class="nav-item col-sm-12 col-md-3 col-lg-3">
                  <a class="nav-link text-center text-white" href="modperfil.php">Editar Perfil</a>
                </li>
                  <li class="nav-item dropdown col-sm-12 col-md-3 col-lg-3">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-center text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>


        </div>

      </nav>
    </div>

  </header>
        <main>
            @yield('content')
        </main>

    <footer>
    <div class="row pieDePagina">
        <ul class="nav container-fluid" id="redes">
          <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active iconoRedes" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
          </li>
        <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active iconoRedes" href="https://twitter.com/login?lang=es"><i class="fab fa-twitter-square"></i></a>
        </li>
        <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active iconoRedes" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
          <a class="nav-link active iconoRedes" href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></i></a>
        </li>
      </ul>

    <ul class="nav container-fluid" id="linksAyuda">
      <li class="nav-item text-center text-white col-sm-3 col-md-3 col-lg-3">
        <i class="fas text-white fa-phone-alt"></i>
        Teléfono <br>
        0800-158-846123
      </li>
      <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
        <a class="nav-link active text-white" href="/faqs">Preguntas frecuentes</a>
      </li>
      <li class="nav-item text-center col-sm-3 col-md-3 col-lg-3">
        <a class="nav-link active text-white" href="/contacto">Contactanos</a>
      </li>
      <li class= "nav-item text-center text-white col-sm-3 col-md-3 col-lg-3">
        Medios de pago
        <p><img class="logoPago2" src="{{asset('img/mercado-pago.png')}}">
           <img class="logoPago2" src="{{asset('img/todo-pago.png')}}">
           <img class="logoPago2" src="{{asset('img/pagofacil.svg')}}"> </p>
        <p><img class="logoPago2" src="{{asset('img/visa.svg')}}">
          <img class="logoPago2" src="{{asset('img/mastercard.svg')}}">
          <img class="logoPago2" src="{{asset('img/naranja.svg')}}">
      </li>
    </ul>


    </div>

  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
