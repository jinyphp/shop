{{-- 상품 상세 주문 제어 부분 --}}
<div>

    <!-- Livewire loading indicator -->
    {{-- <x-loading-star /> --}}


    <!-- 상품 점수 -->
    <div class="flex items-center space-x-2  mb-4">
        <div class="text-orange-500">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-star inline-block w-5 h-5"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
        <a href="#" class="count-review">(05 review)</a>
    </div>


    <!-- 상품명 -->
    <div class="flex items-center justify-between  mb-4">
        <div class="flex-1">
            <h2 class="block font-semibold text-lg text-gray-600 hover:text-gray-500">
                {{$product->name}}
            </h2>
        </div>
        @if($admin)
        <div>
            <button wire:click="edit('{{$product->id}}')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
            </button>
        </div>
        @endif
    </div>


    <!-- 간략 설명-->
    <div class="prose prose-indigo mb-4">
        {{$product->short_description}}
    </div>





    <!-- 판매 가능수량 -->
    <div class="flex mb-4">
        <div class="w-40">
            판매가능 수량:
        </div>
        <div>
            {{$product->stock_status}}
        </div>
    </div>


    <!-- 판매가격 -->
    <style>
        .regprice {
            font-weight: 300;
            font-size:13px !important;
            color: #aaaaaa !important;
            text-decoration: line-through;
            padding-left: 10px;
        }
    </style>
    <div class="flex items-center justify-between">
        <div class="text-gray-600 font-medium">
            @if($product->sale_price > 0)
            <span class="product-price">$ {{$product->sale_price}}</span>
            <del><span class="product-price regprice">$ {{$product->regular_price}}</span></del>
            @else
            {{$product->regular_price}}
            @endif
        </div>

        <!-- 주문수량 -->
        <div class="inline-flex items-center">
            <button type="button"
            wire:click.prevent="decreaseQuantity"
            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-transparent text-gray-600 hover:text-gray-400 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:text-gray-600">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-minus-circle inline-block w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
            </button>

            <span class="px-2">
                {{$qty}}
                {{-- <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty"> --}}
            </span>

            <button type="button"
            wire:click.prevent="increaseQuantity"
            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-transparent text-gray-600 hover:text-gray-400 focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:text-gray-600">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-plus-circle inline-block w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>


    <!-- 옵션선택 -->
    @if($product->option)
    {{--
    <div class="space-y-4 mb-4">
        <div class="flex items-center justify-center space-x-2 p-3 bg-gray-100 rounded-lg">
        <button type="button" class="h-5 w-5 rounded-full shadow-inner inline-block hover:opacity-75 active:opacity-100 focus:outline-none bg-gray-400 focus:ring focus:ring-gray-400 focus:ring-opacity-50"></button>
        <button type="button" class="h-5 w-5 rounded-full shadow-inner inline-block hover:opacity-75 active:opacity-100 focus:outline-none bg-red-400 focus:ring focus:ring-red-400 focus:ring-opacity-50"></button>
        <button type="button" class="h-5 w-5 rounded-full shadow-inner inline-block hover:opacity-75 active:opacity-100 focus:outline-none bg-purple-400 focus:ring focus:ring-purple-400 focus:ring-opacity-50"></button>
        <button type="button" class="h-5 w-5 rounded-full shadow-inner inline-block hover:opacity-75 active:opacity-100 focus:outline-none bg-black focus:ring focus:ring-black focus:ring-opacity-50"></button>
        </div>
    </div>
    --}}
        @if($options)
            {{-- 복수 options --}}
            {{--
            @foreach($options as $i => $option)
            <div class="flex border-b border-gray-400 mb-4">
                <div class="w-40">{{$option->name}}</div>
                <div class="flex-1">

                    <input type="text" wire:model.defer="option.{{$option->id}}">

                    @foreach($option->items as $oitem)
                    <div class="flex justify-between items-center">
                        <div>{{$oitem->name}}</div>
                        <div>price: {{$oitem->price}}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
            --}}

            <br><br>
            @push('css')
            <style>
                input[type="radio"] + ul {
                    display: none;
                }

                input[type="radio"]:checked + ul {
                    display: block;
                }
            </style>
            @endpush
            {!! $optiontree !!}
        @endif



    @endif



    <!-- 배송옵션 -->
    <div class="flex mb-4">
        <div class="w-32">배송옵션:</div>
        <ul>
            @foreach($shipping as $item)
            <li>{{$item->name}}</li>
            @endforeach
        </ul>
    </div>



    <!-- 주문버튼 -->
    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-2  mb-4">
        <button type="button"
        wire:click.prevent="wish({{$product->id}})"
        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none sm:flex-none px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-heart inline-block w-5 h-5"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
            <span>관심상품</span>
        </button>

        <button type="button"
        wire:click.prevent="store({{$product->id}})"
        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none sm:grow px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-shopping-bag inline-block w-5 h-5"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
            <span>장바구니</span>
        </button>

        <button type="button"
        wire:click.prevent="orderNow({{$product->id}})"
        class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none sm:grow px-3 py-2 leading-6 rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-shopping-bag inline-block w-5 h-5"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
            <span>구매하기</span>
        </button>
    </div>






    @if($admin)
    <!-- admin Popup -->
    <x-popup-dialog maxWidth="4xl" wire:model="popup">
        <x-slot name="title">
            {{ __('상품정보') }}
        </x-slot>
        <x-slot name="content">
            <x-form-hor>
                <x-form-label>Slug</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.slug")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>제품명</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.name")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>stock_status</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.stock_status")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>regular_price</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.regular_price")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>sale_price</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.sale_price")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>short_description</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.short_description")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-slot>
        <x-slot name="footer">

            <x-btn-primary wire:click="update">저장</x-btn-primary>
        </x-slot>
    </x-popup-dialog>
    @endif

    <!-- 장바구니 팝업 -->
    <x-popup-dialog maxWidth="4xl" wire:model="popupCart">
        <x-slot name="title">
            {{ __('장바구니 추가') }}
        </x-slot>
        <x-slot name="content">
            선택하신 상품이 장바구니에 추가 되었습니다.
        </x-slot>
        <x-slot name="footer">

            <x-btn-primary wire:click="popupCartClose">닫기</x-btn-primary>
        </x-slot>
    </x-popup-dialog>

</div>
