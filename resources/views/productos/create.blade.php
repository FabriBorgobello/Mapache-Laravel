
@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/productos')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

@include('productos.form', ['modo'=>'crear'])

</form>
</div>
@endsection