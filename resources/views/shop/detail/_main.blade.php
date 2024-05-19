
{{-- style="width:1280px;" --}}
<main class="mx-auto" >

    {{-- breadcrumb --}}
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
    </div>

    <div class="flex justify-between items-start ">

        <div class="w-64 pr-4" style="width:264px">

            <!-- 카테고리 리스트 -->
            @livewire('Category',['code_id'=>1, 'slug'=>$slug])

            <!-- Brands -->
            @livewire('ShopBrands',['direction'=>"virtical"])

            <!-- Popular Products -->
            @livewire('ShopPopularProducts')

        </div>

        <div class="flex-1">

            <!-- Product Detail-->
            <div class="flex justify-between items-start space-x-4">
                <!-- 상품 이미지 -->
                <div class="w-1/3">

                </div>
                <!-- 상품정보 -->
                <div class="flex-1 pl-2">


                    <!-- 소셜링크 -->
                    <div class="wrap-social mb-4">
                        <a class="link-socail" href="#">
                            <img src="{{ asset('assets/shop/templates/images/social-list.png') }}" alt="">
                        </a>
                    </div>

                    <!-- 옵션설정-->

                    @livewire('WidgetShopDetailOption',['product'=>$product,'admin'=>$admin])


                    <hr>
                    <!-- 쿠폰관리 -->
                    <div class="flex mb-4">
                        <div class="w-40">
                            쿠폰
                        </div>
                        <div>
                            @livewire("ShopCouponDownload",['product_id' => $product['id']])
                        </div>
                    </div>




                </div>
            </div>





            <!-- Tabs -->
            {{-- 상품상세 정보 --}}
            <x-tab-radio class="mt-4">
                <x-tab-radio-item selected="checked">
                    <x-slot name="title">
                        상품설명
                    </x-slot>
                    @livewire('ShopProductDescription',['product'=>$product, 'admin'=>$admin])
                </x-tab-radio-item>

                <x-tab-radio-item>
                    <x-slot name="title">
                        상세정보
                    </x-slot>
                    @livewire('ShopProductInfomation',['product'=>$product, 'admin'=>$admin])
                </x-tab-radio-item>

                <x-tab-radio-item>
                    <x-slot name="title">
                        구매후기
                    </x-slot>
                    @livewire('ShopProductReviews',['product_id'=>$product['id']])

                </x-tab-radio-item>

                <x-tab-radio-item>
                    <x-slot name="title">
                        목차
                    </x-slot>
                    목차 목록 입니다.
                </x-tab-radio-item>
            </x-tab-radio>








        </div>
    </div>




</main>
