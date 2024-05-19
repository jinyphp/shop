<x-theme theme="shop.templates">
    <x-theme-layout>
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link">
                        <a href="/shop" class="link">home</a>
                    </li>
                    <li class="item-link">
                        <span>Wishlist</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- id="main" class="main-site left-sidebar" --}}
        <main>
            <!-- Heading -->
            {{--
            <div class="border-b py-2 mb-6 flex items-center justify-between">
                <h3 class="uppercase font-semibold tracking-wide">
                    관심상품
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
            --}}
            <!-- END Heading -->
            <!-- Page Heading -->
            <h2 class="text-2xl font-bold py-2 border-b-2 border-gray-200 mb-4 lg:mb-8">
                관심상품
                <span class="block sm:inline-block text-xl text-gray-600 font-normal">상품을 잠시 담아 두세요!</span>
            </h2>
            <!-- END Page Heading -->

            @livewire('ShopWishList')
        </main>
    </x-theme-layout>
</x-theme>
