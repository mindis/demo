@extends('layouts.master')

@section('content')
    {{ Form::open(['route' => 'product.store', 'method' => 'post']) }}
        {{ FormField::name() }}
        {{ Form::submit('Create Product') }}
    {{ Form::close() }}
@stop