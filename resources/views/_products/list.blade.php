<div>
    <!--wrap shop control-->
    <div class="wrap-shop-control">

        <h1 class="shop-title">Digital & Electronics</h1>

        <div class="wrap-right">

            <div class="sort-item orderby ">
                <select name="orderby" class="use-chosen" wire:model="sorting">
                    <option value="default" selected="selected">Default sorting</option>
                    {{--
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    --}}
                    <option value="date">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                </select>
            </div>

            <div class="sort-item product-per-page" wire:model="pagesize">
                <select name="post-per-page" class="use-chosen" >
                    <option value="12" selected="selected">12 per page</option>
                    <option value="16">16 per page</option>
                    <option value="18">18 per page</option>
                    <option value="21">21 per page</option>
                    <option value="24">24 per page</option>
                    <option value="30">30 per page</option>
                    <option value="32">32 per page</option>
                </select>
            </div>

            <div class="change-display-mode">
                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
            </div>

        </div>

    </div>
    <!--end wrap shop control-->


    <div class="row">
        <ul class="product-list grid-products equal-container">

            @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
            @endphp

            @foreach ($products as $product)
            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                        <a href="/shop/detail/{{$product->slug}}" title="{{$product->name}}">
                            <figure><img src="{{ asset('assets/shop/templates/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="/shop/detail/{{$product->slug}}" class="product-name"><span>{{$product->name}}</span></a>
                        <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>

                        <a href="#" class="btn add-to-cart"
                            wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">
                            Add To Cart
                        </a>
                        <style>
                            .product-wish {
                                position:absolute;
                                top:10%;
                                left:0;
                                z-index: 90;
                                right:30px;
                                text-align: right;
                                padding-top:0;
                            }

                        </style>
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
            </li>
            @endforeach



        </ul>
    </div>


    <div class="wrap-pagination-info">
        {{-- <ul class="page-numbers">
            <li><span class="page-number-item current" >1</span></li>
            <li><a class="page-number-item" href="#" >2</a></li>
            <li><a class="page-number-item" href="#" >3</a></li>
            <li><a class="page-number-item next-link" href="#" >Next</a></li>
        </ul>
        <p class="result-count">Showing 1-8 of 12 result</p> --}}
        {{$products->links()}}
    </div>
</div>
