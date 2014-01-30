@extends('layouts.master')

@section('content')
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