<h1 class='text-center'>{{ $modo=='crear'?'Añadir producto':'Modificar producto'}}</h1>

<div class="form-group">
<label for="Nombre" class="control-label">Nombre</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre" value="{{ isset($producto->nombre)?$producto->nombre:old('Nombre') }}">
{!! $errors-> first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Descripcion" class="control-label">Descripción</label>
<input type="text" class="form-control {{$errors->has('Descripcion')?'is-invalid':''}}" name="Descripcion" id="Descripcion" value="{{ isset($producto->descripcion)?$producto->descripcion:old('Descripcion') }}">
{!! $errors-> first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Precio" class="control-label">Precio</label>
<input type="number" min="0" step="any" class="form-control form-control {{$errors->has('Descripcion')?'is-invalid':''}}" name="Precio" id="Precio" value="{{ isset($producto->precio)?number_format((float)$producto->precio, 2, '.', ''):number_format((float)old('Precio'), 2, '.', '') }}">
{!! $errors-> first('Precio','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Foto" class="control-label">Fotografía</label>
@if(isset($producto->foto))
<br>
<img src="{{ asset('storage'). '/' . $producto->foto}}" alt="" width="100" height="100"  class="img-thumbnail img-fluid">
<br>
<br>
@endif
<input type="file" class="form-control-file {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto"value="{{ isset($producto->foto)?$producto->foto:''}}">
{!! $errors-> first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>

<br>
<input type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar' : 'Modificar' }}">
<a href="{{ url('productos') }}" class="btn btn-primary">Regresar</a>