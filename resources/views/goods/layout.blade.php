<x-www-layout>
    shop_goods_list

    <p>전체목록</p>
    @livewire('ShopProductList',[
        'category_id'=>null,
        // 'cartidx'=>$cartidx
        ])

    {{-- drag 상품등록 --}}
    @if($admin)
    <x-shop-dropzone path="/images/goods">
        {{-- <span class="font-bold">{{$cate->title}}</span> --}}
        드래그 하여 상품을 등록합니다.
    </x-shop-dropzone>
    @endif

</x-www-layout>

