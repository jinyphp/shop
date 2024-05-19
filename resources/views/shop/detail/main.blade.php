<x-www-layout>


    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">

                    <!-- 상품이미지 -->
                    @livewire('ShopProductImage',[
                        'product'=>$product,
                        'admin'=>$admin
                    ])
                </div>
                <div class="col-md-6">
                    <!-- 구매정보 -->
                    @livewire('ShopProductDetail',[
                        'slug'=>$slug,
                        'cartidx'=>$cartidx,
                        'admin'=>$admin
                    ])
                </div>
            </div>
        </div>
    </section>

    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>

            {{-- 카테고리 연관상품 --}}
            @livewire('ShopRelatedProducts',[
                'category_id'=>$product['category_id']
            ])

        </div>
    </section>





</x-www-layout>
