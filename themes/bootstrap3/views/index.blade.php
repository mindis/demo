@extends('layouts.master')

@section('content')
    <div class="hero-unit">
        <h1>{{ Config::get('shopavel/shopavel::brand.title') }}</h1>
        <p>{{ Config::get('shopavel/shopavel::brand.title') }}</p>
    </div>

    <div class="row product-list">
        @foreach (Product::all() as $key => $product)
            <div class="col-lg-4">
                @include('product.partials.list-item')
            </div>

            @if ($key == 2)
                </div><div class="row product-list">
            @endif
        @endforeach
    </div>
@stop