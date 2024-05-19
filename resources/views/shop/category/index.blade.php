<x-theme theme="shop.templates">
    <x-theme-layout>
        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link">
                        <a href="/shop" class="link">home</a>
                    </li>
                    <li class="item-link">
                        <span>category</span>
                    </li>
                </ul>
            </div>
        </div>

        <ul>
            @foreach($categories as $item)
            <li>
                <a href="/shop/products/{{$item->id}}" class="link">
                    {{$item->title}}
                </a>
            </li>
            @endforeach
        </ul>
    </x-theme-layout>
</x-theme>
