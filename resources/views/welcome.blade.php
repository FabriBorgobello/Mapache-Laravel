@extends('layouts.appuss')
@section('content')
<div class="">
  <!-- CARRUSEL DE OFERTAS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <div id="carrusel" class="carousel slide container-fluid sinMargen" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carrusel" data-slide-to="0" class="active"></li>
      <li data-target="#carrusel" data-slide-to="1"></li>
      <li data-target="#carrusel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/Ofertas1.jpg')}}" class="d-block w-100" alt="Oferta1">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/Ofertas2.jpg')}}" class="d-block w-100" alt="Oferta2">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/Ofertas3.jpg')}}" class="d-block w-100" alt="Oferta3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>

<!-- PRODUCTOS -->
<div class="container">
  <br>
  <br>
  <div class="categoria row">
    @foreach ($productos as $producto)
    <div class="card col-sm-12 col-md-6 col-lg-3 px-1" style="">
      <img src="{{ asset('storage'). '/' . $producto->foto}}" class="card-img-top" alt="..." width="200">
      <div class="card-body">
        <h5 class="card-title font-weight-bold">{{$producto->nombre}}</h5>
        <p class="card-text font-weight-light">{{$producto->descripcion}}</p>
        <p class="card-text">$ <?php echo number_format((float) $producto->precio, 2, '.', ''); ?></p>
        <a href="#" class="btn btn-primary">Ver más</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
<br>
</div>
<br>





<!-- PRODUCTOS -->
<!--<div class="container">
  <div class="todo letra">
    <div class="card-deck">
      <div class="card" style="width: 18rem;">
        @foreach ($productos as $producto)
        <img src="{{$producto->foto}}" class="card-img-top" alt="{{$producto->nombre}}">
        <div class="card-body">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <p class="card-text">{{$producto->descripcion}}</p>
          <a href="{{route('producto-detalle',$producto->id)}}"><button type="button" class="btn colorVioleta">VER MÁS</button></a>
            </div>
          @endforeach
      </div>
  </div>

  </div>

</div>
-->

@endsection