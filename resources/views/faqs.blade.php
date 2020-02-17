@extends('layouts.app')
@section('title')
Olvide mi contraseña
@endsection


@section('content')
  <?php
  $faq=["¿Cómo me registro en Mapache?", "¿Cómo me logueo en Mapache?", "¿Cómo agrego productos a mi carro?",
        "¿Cuales son las formas de pago?", "¿Dónde está mi pedido?", "¿Cuál es la política de reembolsos/cambios?",
      "¿Cómo puedo contactarme con un representante de la empresa?", "¿Cuál es el costo de envío?"];

  $registro="En la esquina superior derecha de la página usted podrá encontrar el link 'registro' que al
  hacerle click lo va a reedireccionar a la pagina de registro. Hecho esto usted debe completar los campos
  y una vez completados hacer click al boton 'registrar' para ser parte de Mapache";

  $login="Para poder loguearse en nuestra página primero debe estar registrado, una vez hecho esto usted
  ya está en condiciones de loguearse. Primero damos click al enlace ubicado en la esquina superior derecha
  de la página que está junto al link de registro, una vez reedireccionado debe completar con su nombre
  de usuario y la contraseña que haya elegido al registrarse, hecho esto usted ya estaría logueado";

  $carro="Junto a cada producto que usted desea ver en la pagina se encontrará con el dibujo de un carro
  de supermercado el cual al hacerle click automaticamente está agregando un producto a su carro de compras,
  una vez seleccionados los productos que usted desea comprar puede ver su carro haciendo click en el dibujo
  del carro que se encuentra al lado de 'registro' y 'login'. Una vez dentro del carro usted puede
  seleccionar la forma de pago y adjuntar información personal";

  $pago="usted puede seleccionar distintas formas de pago: tarjeta de débito, tarjeta de crédito, Rapipago,
  Pagofácil.";

  $pedido="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $politica="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $contacto="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $costo="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $respuestas=[$registro, $login, $carro, $pago, $pedido, $politica, $contacto, $costo];
   ?>
  <div class="container-fluid">  <div class="todo letra">
    <div class="container">
      <div class="todo">
        <div class="titulo">
          <h2>Preguntas frecuentes</h2>
        </div>
        <div class="row">
          <div class="accordion" id="accordionExample">
          <?php for ($i=0; $i < count($faq); $i++) :?>
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
                  <?= $faq[$i]; ?>
                </button>
              </h2>
              </div>

              <div id="collapseOne<?=$i?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <?= $respuestas[$i]; ?>
                </div>
              </div>
            </div>
          <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@endsection
