{{-- 상품 grid cell --}}
<div>
    <div class="product-thumnail">
        <a href="/shop/detail/{{$product->slug}}" title="{{$product->name}}">
            <figure>
                <img src="{{ asset('images/shop/products') }}/{{$product->image}}" alt="{{$product->name}}">
            </figure>
        </a>
    </div>

    <div class="product-info">
        <a href="/shop/detail/{{$product->slug}}" class="product-name">
            <span>{{$product->name}}</span>
        </a>
        <div class="wrap-price">
            <span class="product-price">
                ${{$product->regular_price}}
            </span>
        </div>

        <a href="#" class="btn add-to-cart"
            wire:click.prevent="addCart({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">
            Add To Cart
        </a>



        <div class="product-wish">
            @if($witems->contains($product->id))
                <a href="#" wire:click.prevent="removeFromWishList({{$product->id}})">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    Wish*
                </a>
            @else
                <a href="#"
                    wire:click.prevent="addToWishlist({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    wish
                </a>
            @endif
        </div>
    </div>

</div>
