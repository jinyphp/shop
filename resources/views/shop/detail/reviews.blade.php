<div>
    <!-- Comments Section: Alternate With Lines -->
    <div class="bg-white p-4">



        <!-- Comment Form -->
        <!-- END Comment Form -->

        <!-- Divider: With Heading -->
        {{--
        <h3 class="flex items-center my-8">
            <span aria-hidden="true" class="grow bg-gray-200 rounded h-0.5"></span>
            <span class="text-lg font-medium mx-3">리뷰 상품평</span>
            <span aria-hidden="true" class="grow bg-gray-200 rounded h-0.5"></span>
        </h3>
        --}}
        <!-- END Divider: With Heading -->


        {{-- 팝업 리뷰 작성창 --}}
        <!-- Divider: Heading With Action -->
        <x-popup-dialog maxWidth="7xl" wire:model="popup">
            <x-slot name="title">
                {{ __('리뷰작성') }}
            </x-slot>
            <x-slot name="content">
                @include('jiny-shop::shop.detail.review_create')

            </x-slot>
            <x-slot name="footer">
                <x-btn-second wire:click="close">닫기</x-btn-second>
                {{--
                <x-btn-primary wire:click="save">작성</x-btn-primary>
                --}}
            </x-slot>
        </x-popup-dialog>

        <h3 class="flex items-center my-8">
            <span class="text-lg font-medium mr-3">리뷰 상품평</span>
            <span aria-hidden="true" class="grow bg-gray-200 rounded h-0.5"></span>
            <button type="button"
            wire:click="create('{{$product->id}}')"
            class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-plus inline-block w-4 h-4">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
                    </path>
                </svg>
                <span>작성하기</span>
            </button>
        </h3>
        <!-- END Divider: Heading With Action -->


        {{-- 오류 메시지 --}}
        @if(Session::has('message'))
        <!-- Danger Alert -->
        <div class="p-4 md:p-5 rounded text-red-700 bg-red-100 mb-4">
            <div class="flex items-center mb-3">
                <svg class="hi-solid hi-x-circle inline-block w-5 h-5 mr-3 flex-none text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                <h3 class="font-semibold">
                    {{Session::get('message')}}
                </h3>
            </div>
        </div>
        <!-- END Danger Alert -->
        @endif


        @foreach($reviews as $item)
        <!-- Comment Box -->
        @if($item->level>0)
            @php
                $reply_padding = $item->level * 20;
            @endphp
        <div class="flex space-x-4 mb-4" style="padding-left:{{$reply_padding}}px;">
        @else
        <div class="flex relative mb-4">
        @endif

            {{-- 프로필이미지
            <img src="https://source.unsplash.com/mEZ3PoFGs_k/128x128"
                alt="User Avatar"
                class="flex-none inline-block w-10 h-10 sm:w-16 sm:h-16 rounded-full">
            --}}

            <div class="grow ml-4">
                <!-- 작성자-->
                <div class="">
                    <a href="javascript:void(0)" class="font-semibold text-blue-600 hover:text-blue-400">
                        {{$item->username}}
                    </a>
                    <span class="text-gray-600">
                        {{$item->created_at}}
                    </span>
                    @if(Auth::check() && Auth::user()->email == $item->email)
                    <a href="javascript:void(0)"
                    wire:click="edit('{{$item->id}}')"
                    class="text-blue-600 hover:text-blue-500">
                        Edit
                    </a>
                    @endif
                </div>

                <p class="mb-1">
                    {{$item->review}}
                </p>
                <div class="space-x-2">
                    <div class="star-rating">
                        <span style="width:{{$item->rank}}%;">Rated
                            <strong class="rating">{{$item->rank}}</strong>
                            out of 5
                        </span>
                    </div>

                    @auth
                        {{-- 자신이 like한 경우 --}}
                        @if( isset($liked[ $item->id ]) && $liked[ $item->id ] )
                            <span class="text-gray-600 cursor-pointer"
                            wire:click="unlike('{{$item->id}}')"
                            >
                                Like ({{$like_count[ $item->id ]}})
                            </span>
                        @else
                        {{-- 신규 like--}}
                            <a href="javascript:void(0)"
                            wire:click="like('{{$item->id}}')"
                            class="text-blue-600 hover:text-blue-500">
                                Like ({{$like_count[ $item->id ]}})
                            </a>
                        @endif

                    @endauth

                    <a href="javascript:void(0)"
                    wire:click="reply('{{$item->id}}')"
                    class="text-blue-600 hover:text-blue-500">
                        Reply
                    </a>

                </div>
            </div>
        </div>
        <!-- END Comment Box -->

        @endforeach
    </div>



</div>
