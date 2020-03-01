@extends('layouts.appuss')
@section('content')
  <div class="content todo letra">
    <div class="table-cart">

      @if(count($carro))
    <div class="table-Responsive">
      <table class="table table-striped table-hover table-bordered">
        <thead style="text-align:center;">
          <tr>
            <th>Cantidad</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>Quitar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carro as $item)
            <tr>
              <td style="text-align:right;"><!-- -->
                <input type="number" min="1" max="100" value="{{ $item->cantidad}}" id="producto_{{$item->id}}">
                <a href="#" class="btn btn-warning btn-update-item" data-href="{{route('carro-update',$item->id)}}" data-id="{{$item->id}}">
                  <i class="fa fa-refresh"></i>
                </a>
              </td>
              <td><img src="{{$item->foto}}"alt="{{$item->nombre}}"></td>
              <td>{{$item->nombre}}</td>
              <td style="text-align:right;">{{number_format($item->precio,2)}}</td>
              <td style="text-align:right;">{{number_format($item->precio * $item->cantidad,2)}}</td>
              <td style="text-align:center;">
                <a href="{{route('carro-delete', $item->id)}}"class="btn btn-danger"><i class="fa fa-remove"</a>
              </td>
            </tr>

          @endforeach
        </tbody>

      </table>
    </div>
    <hr>
    <div class="container"style="text-align-last:end">
      <h3>
        <span class="label label-success">
           Total: US${{number_format($total,2)}}</span>
      </h3>

    </div>

    <hr>
    <div class="container-fluid" style="text-align: -webkit-center">
      <p>
        <a href="{{route('home')}}" class="btn btn-primary">
          <i class="fa fa-chevron-circle-left"></i> Volver
        </a>
        <a href="{{route('carro-vaciar')}}" class="btn btn-warning">
          <i class="fa fa-trash"></i> Vaciar carrito
        </a>
        <a href="{{route('home')}}" class="btn btn-primary"> Continuar <i class="fa fa-chevron-circle-right"></i>
        </a>
      </p>
    </div>
  @else
    <div class="container cuadro" style="text-align: center;">
    <h3>
      <span class="text-center">No hay productos en el carrito</span>
    </h3>

    </div>

  @endif


  </div>
</div>
@endsection
