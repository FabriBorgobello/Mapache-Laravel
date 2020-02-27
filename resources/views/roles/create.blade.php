@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{url('/roles')}}" class="form-horizontal" method="POST">
        {{ csrf_field() }}

        @include('roles.partials.form', ['modo'=>'crear'])

    </form>
</div>
@endsection