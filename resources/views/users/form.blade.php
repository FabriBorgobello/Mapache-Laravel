<h1 class='text-center'>{{ $modo=='crear'?'Añadir usuario':'Modificar usuario'}}</h1>

<div class="form-group">
<label for="Name" class="control-label">Nombre</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Name" id="Name" value="{{ isset($user->name)?$user->name:old('name') }}">
{!! $errors-> first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($roles as $role)
      <li>
        <input type="checkbox" name="roles[]" id="{{ $role->name }}" value="{{ $role->id }}" @if($user->roles->contains($role->id)) checked=checked @endif>
        <label for="{{ $role->name }}">
          {{ $role->name }}
          <em>( {{$role->description ?: 'Sin descripción'}} )</em>
        </label>

      </li>
    @endforeach
  </ul>
</div>

<br>
<input type="submit" class="btn btn-success" value="{{ $modo=='crear' ? 'Agregar' : 'Modificar' }}">
<a href="{{ url('users') }}" class="btn btn-primary">Regresar</a>
