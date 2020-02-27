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
    <label for="id_marca" class="control-label">Marca</label>
    <select name="id_marca" id="id_marca" class="form-control {{$errors->has('id_marca')?'is-invalid':''}}" value="{{ isset($producto->id_marca)?$producto->marca->nombre:old('id_marca')}}">
        @foreach($marcas as $marca)
        <option name="id_marca" value="{{$marca->id}}">{{$marca->nombre}}</option>
        @endforeach
    </select>
    {!! $errors-> first('id_marca','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="id_categoria" class="control-label">Categoria</label>
    <select name="id_categoria" id="id_categoria" class="form-control {{$errors->has('id_categoria')?'is-invalid':''}}" value="{{ isset($producto->id_categoria)?$producto->categoria->nombre:old('id_categoria')}}">
        @foreach($categorias as $categoria)
        <option name="id_categoria" value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach
    </select>
    {!! $errors-> first('id_categoria','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Foto" class="control-label">Fotografía</label>
    @if(isset($producto->foto))
    <br>
    <img src="{{ asset('storage'). '/' . $producto->foto}}" alt="" width="100" height="100" class="img-thumbnail img-fluid">
    <br>
    <br>
    @endif
    <input type="file" class="form-control-file {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value="{{ isset($producto->foto)?$producto->foto:''}}">
    {!! $errors-> first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>

<br>
<input type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar' : 'Modificar' }}">
<a href="{{ url('productos') }}" class="btn btn-primary">Regresar</a>