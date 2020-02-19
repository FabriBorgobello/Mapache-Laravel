<h1 class='text-center'>{{ $modo=='crear'?'Añadir rol':'Modificar rol'}}</h1>

<div class="form-group">
<label for="name" class="control-label">Nombre</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="name" id="name" value="{{ isset($role->name)?$role->name:old('Nombre') }}">
{!! $errors-> first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
<label for="slug" class="control-label">Url amigable</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="slug" id="slug" value="{{ isset($role->slug)?$role->slug:old('Nombre') }}">
{!! $errors-> first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
<label for="description" class="control-label">Descripción</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="description" id="description" value="{{ isset($role->description)?$role->description:old('Nombre') }}">
{!! $errors-> first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
  <input type="radio" name="roles[]" id="{{ $role->name }}" value="{{ $role->id }}"@if($role->special=="all-access") checked=checked @endif>
  <label for="{{ $role->name }}">Acceso total</label>
  <input type="radio" name="roles[]" id="{{ $role->special }}" value="{{ $role->id }}"@if($role->special=="no-access") checked=checked @endif>
  <label for="{{ $role->special }}">Ningún acceso</label>
</div>
<h3>Lista de permisos</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $permission)
      <li>
        <input type="checkbox" name="permissions[]" id="{{ $permission->id }}" value="{{ $permission->id }}"@if($permission->roles->contains($role->id)) checked=checked @endif>
        <label for="{{ $permission->id }}">{{$permission->name}}</label>
        <em>( {{$permission->description ?: 'Sin descripción'}} )</em>
      </li>
    @endforeach
  </ul>
</div>

<br>
<input type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar' : 'Modificar' }}">
<a href="{{ url('roles') }}" class="btn btn-primary">Regresar</a>
