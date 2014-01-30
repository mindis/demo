@extends('layouts.master')

@section('content')
    <article class="product">
        <a href="{{ URL::route('product.show', ['product' => $product->id]) }}">
            <h3>{{ $product->name }}</h3>
        </a>

        <dl>
            <dt>SKU</dt>
            <dd>{{ $product->sku }}</dd>

            <dt>Created At</dt>
            <dd>{{ $product->created_at }}</dd>
        </dl>

        <a href="{{ URL::route('product.show', ['product' => $product->id]) }}">
            {{--<img src="{{ shop_asset($product->images->first()) }}" alt="{{ $product->name }}">--}}
        </a>
    </article>
@stop