@extends('layouts.app')
@section('title')
Contactanos
@endsection
@section('content')
<div class="todo letra">
  <?php
  $provincias = [
    "BA"=>"Buenos Aires",
    "CAT"=>"Catamarca",
    "CHA"=>"Chaco",
    "CHU"=>"Chubut",
    "CBA"=>"Córdoba",
    "COR"=>"Corrientes",
    "ER"=>"Entre Rios",
    "FOR"=>"Formosa",
    "JU"=>"Jujuy",
    "LP"=>"La Pampa",
    "LR"=>"La Rioja",
    "MEN"=>"Mendoza",
    "MI"=>"Misiones",
    "NE"=>"Neuquen",
    "RN"=>"Rio Negro",
    "SAL"=>"Salta",
    "SJ"=>"San Juan",
    "SL"=>"San Luis",
    "SC"=>"Santa Cruz",
    "SF"=>"Santa Fe",
    "SE"=>"Stgo del Estero",
    "TF"=>"Tierra del Fuego",
    "TU"=>"Tucuman"
  ];


   ?><div class="container-fluid">
     <div class="container">
       <div class="dentro">
         <div class="row">
           <h2>Contactanos</h2>
           <div class="cuadro">
             <form>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
                 </div>
                 <div class="form-group col-md-6">
                   <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido y Nombre">
                 </div>
               </div>
               <div class="form-group">
                 <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
               </div>
               <div class="form-group">
                 <input type="number" class="form-control" id="inputAddress2" placeholder="Teléfono">
               </div>
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
                 </div>
                 <div class="form-group col-md-6">
                   <select id="inputState" class="form-control" placeholder="Seleccione una provincia">
                     <option disabled selected>Seleccione una provincia</option>
                     <?php foreach ($provincias as $valor => $provincia) :?>
                     <option value="<?=$valor;?>"><?= $provincia; ?></option>
                   <?php endforeach;?>
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tu mensaje"></textarea>
               </div>
               <div class="form-group">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" id="gridCheck">
                   <label class="form-check-label" for="gridCheck">
                     Mantenerme al tanto de las promociones
                   </label>
                 </div>
               </div>
               <button type="submit" class="btn btn-primary">Enviar</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</div>


@endsection
