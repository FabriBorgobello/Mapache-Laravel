@extends('layouts.appuss')
@section('content')
<div class="todo letra">
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
      <img src="{{asset('img/Ofertas2.jpg')}}"class="d-block w-100" alt="Oferta2">
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
<div class="container">

</div>
</div>

@endsection
