@extends('basic.views.layout')

@section('content')
    <div class="hero-unit">
        <h1>{{ shop('brand.title') }}</h1>
        <p>{{ shop('brand.tagline') }}</p>
    </div>

    <div class="row product-list">
        @loop_products(['order' => 'latest', 'take' => 8])
            <div class="col-lg-4">
                @include('product.show-list')
            </div>

            @if ($key == 2)
                </div><div class="row product-list">
            @endif
        @end_loop()
    </div>
@stop