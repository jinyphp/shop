<div class="container">
    <!-- Heading -->
    <div class="border-b py-2 mb-6 flex items-center justify-between">
        <h3 class="uppercase font-semibold tracking-wide">
            관련상품
        </h3>
        <div>
            <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-6 rounded border-transparent text-gray-600 hover:text-gray-400 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span>more</span>
            </button>
        </div>
    </div>
    <!-- END Heading -->

    <!-- Products -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 md:gap-8">
        @foreach($relation_products as $relation)
        <div class="flex flex-col justify-between">
            <div class="group relative overflow-hidden mb-2">
                <a href="/shop/detail/{{$relation->id}}">
                    <img src="{{ asset($relation->image) }}" class="object-fill" alt="Product Image">
                </a>
                {{--
                <div class="p-4 flex items-center justify-center absolute inset-0 bg-blue-900 bg-opacity-90 transform transition ease-out opacity-0 scale-150 group-hover:opacity-100 group-hover:scale-100">
                <div class="flex flex-col space-y-2">
                    <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-heart inline-block w-4 h-4"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                    <span>Favorite</span>
                    </button>
                    <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-3 py-2 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-shopping-bag inline-block w-4 h-4"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                    <span>Add to Cart</span>
                    </button>
                </div>
                </div>
                --}}
            </div>
            <div>
                <a href="/shop/detail/{{$relation->id}}" class="block font-semibold text-gray-600 hover:text-gray-500">
                    {{$relation->name}}
                </a>
                <div class="text-gray-500 font-medium">
                    ${{$relation->regular_price}}
                </div>
            </div>
        </div>
        @endforeach

      </div>
      <!-- END Products -->

</div>

{{--
    <div class="wrap-show-advance-info-box style-1 box-in-site">
        <h3 class="title-box">
            관련 상품
        </h3>

        <div class="wrap-products">
            <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                data-loop="false" data-nav="true" data-dots="false"
                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},
                "768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                @foreach($relation_products as $relation)
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="/shop/detail/{{$relation->id}}" title="{{$relation->name}}">
                            <figure>
                                <img src="{{ asset($relation->image) }}" width="214" height="214" alt="{{$relation->name}}">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item new-label">new</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">
                            <span>{{$relation->name}}</span>
                        </a>
                        <div class="wrap-price">
                            <span class="product-price">${{$relation->regular_price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!--End wrap-products-->

    </div>
--}}
