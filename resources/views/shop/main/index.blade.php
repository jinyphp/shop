<x-www-layout>
    <style>
        .no-underline {
            text-decoration-line: none;
        }
    </style>
    <!-- Section -->
    <section class="py-3 mb-2 bg-gray-100">
        <div class="container">
            <div class="d-flex gap-2">
                <span>
                    <a class="no-underline" href="/shop/category">Category</a>
                </span>

                <span class="py-2">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-balck"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                </span>

                <span>
                    <a class="no-underline" href="/shop/brand">Brand</a>
                </span>

                <span class="py-2">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-balck"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                </span>

                <span>
                    <a class="no-underline" href="/shop/products">Products</a>
                </span>
            </div>
        </div>
    </section>



    <!--MAIN SLIDE-->
    <div class="container">
        @livewire('LiveSliders')
    </div>

    <!--BANNER-->
    <div class="wrap-banner style-twin-default">
        <x-jiny-banner code="001">
        </x-jiny-banner>
        <x-jiny-banner code="002">
        </x-jiny-banner>
    </div>

    <!--On Sale-->
    @livewire('LiveOnSale')


    <!--Latest Products-->
    @livewire('LiveLastProduct')

    <!--Product Categories-->
    @livewire('LiveMainCate')


</x-www-layout>

