
@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/users/'. $user->id )}}" method="POST">

{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('users.form', ['modo'=>'editar'])

</form>
</div>
@endsection
