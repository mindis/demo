<article class="product-list">
    <a href="{{ URL::route('product.show', ['product' => $product]) }}">
        <h3>{{ $product->title }}</h3>
    </a>

    <a href="{{ URL::route('product.show', ['product' => $product]) }}">
        <img src="{{ shop_asset($product->images->first()) }}" alt="{{ $product->title }}">
    </a>
</article>