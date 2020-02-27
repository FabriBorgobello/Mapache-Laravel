@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('/roles/'. $role->id )}}" method="POST">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        @can('roles.edit')
        @include('roles.partials.form', ['modo'=>'editar'])
        @endcan
    </form>
</div>
@endsection