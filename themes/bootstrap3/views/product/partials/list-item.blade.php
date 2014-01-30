<article class="product-list">
    <a href="{{ URL::route('product.show', ['product' => $product->id]) }}">
        <h3>{{ $product->name }}</h3>
    </a>

    <a href="{{ URL::route('product.show', ['product' => $product]) }}">
        {{--<img src="{{ shop_asset($product->images->first()) }}" alt="{{ $product->name }}">--}}
    </a>
</article>