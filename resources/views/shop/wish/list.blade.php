<div class="container">
    <!-- Livewire loading indicator -->
    <x-loading-star />

    @if(count($wish) >0)
    <!-- Products -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 md:gap-8">
        @foreach ($wish as $item)
        <div class="flex flex-col justify-between">
            <div class="group relative overflow-hidden mb-2">
                <a href="/shop/detail/{{$item->product_id}}">
                    <img src="{{ asset($item->image) }}" class="object-fill" alt="Product Image">
                </a>

                <div class="p-4 flex items-center justify-center absolute inset-0 bg-gray-700 bg-opacity-90 transform transition ease-out opacity-0 scale-150 group-hover:opacity-100 group-hover:scale-100">
                    <div class="flex flex-col space-y-2">

                        <button type="button"
                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white"
                        wire:click.prevent="moveProductFromWishlistToCart('{{$item->id}}')">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-shopping-bag inline-block w-4 h-4"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <span>Add to Cart</span>
                        </button>

                        <button type="button"
                        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-red-300 bg-red text-gray-100 hover:text-gray-100 hover:bg-red-100 hover:border-gray-300 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-red active:border-red"
                        wire:click.prevent="removeFromWishList('{{$item->id}}')">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-heart inline-block w-4 h-4"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                            <span>Delete</span>
                        </button>
                    </div>
                </div>

            </div>
            <div>
                <a href="/shop/detail/{{$item->product_id}}" class="block font-semibold text-gray-600 hover:text-gray-500">
                    {{$item->product}}
                </a>
                <div class="text-gray-500 font-medium">
                    {{--$relation->regular_price--}}
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- END Products -->
    @else

    <!-- Warning Alert -->
    <div class="p-4 md:p-5 rounded text-orange-700 bg-orange-100">
        <div class="flex items-center">
            <svg class="hi-solid hi-exclamation inline-block w-5 h-5 mr-3 flex-none text-orange-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
            <h3 class="font-semibold grow">
                등록된 관심상품이 없습니다.
            </h3>
        </div>
    </div>
    <!-- END Warning Alert -->
    @endif



{{--
    <div class="row">

        @if(count($wish) >0)
        <ul class="product-list grid-products equal-container">

            @foreach ($wish as $item)
            <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                        <a href="/shop/detail/{{$item->product_id}}" title="{{$item->product}}">
                            <figure><img src="{{ asset($item->image) }}""></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="/shop/detail/{{$item->product_id}}" class="product-name">
                            <span>{{$item->product}}</span>
                        </a>


                        <a href="#" class="btn add-to-cart"
                            >
                            Move To Cart
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
                            <a href="#" >
                                delete
                            </a>

                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        @else
            <h4>No item</h4>
        @endif
    </div>
--}}
</div>
