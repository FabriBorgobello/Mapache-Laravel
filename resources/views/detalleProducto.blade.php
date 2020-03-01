@extends('layouts.appuss')
@section('content')
  <div class="row todo letra">
    <div class="foto-producto-vista col-sm-12 col-md-7 col-lg-7">
    <img src="{{$productos->foto}}" class="card-img-top" alt="{{$productos->nombre}}">
    </div>
    <div class="precio-producto-vista col-sm-12 col-md-5 col-lg-5">
      <h5>{{$productos->nombre}}</h5>
      <p>{{$productos->descripcion}}</p>
  <br>
    <p id="precio">Precio:	US$ {{$productos->precio}} </p>
    <br>
    <div class="botones">
      <a href="{{route('carro-add',$productos->id)}}"><button type="button" class="btn colorVioleta">Agregar al carrito</button></a>

    </div>

    </div>
  </div>
  <div class="row">
    <div class="info-producto-vista col-sm-12 col-md-12 col-lg-12"></div>
  </div>

@endsection
