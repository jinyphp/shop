<x-theme theme="shop.templates">
    <x-theme-layout>

        @push('css')
        <style>
            .pl-4, .px-4 {
                padding-left: 1.5rem !important
            }

            .pb-2, .py-2 {
                padding-bottom: .5rem !important
            }
            .pt-2, .py-2 {
                padding-top: .5rem !important
            }
            .bg-white {
                background-color: #fff !important
            }
            .border {
                border: 1px solid #dee2e6 !important
            }
            nav svg {
                height: 20px;
            }
            svg {
                overflow: hidden
                vertical-align:middle;
            }
            .wrap-pagination-info {
                margin-top:46px;
                border-top: 1px solid #e6e6e6;
                padding-top:10px;
            }
            .wrap-pagination-info .hidden {
                display: block !important
            }
            .wrap-pagination-info .rounded-l-md {
                margin-right:5px;
            }
            .wrap-pagination-info .rounded-r-md {
                margin-left:5px;
            }
        </style>
        @endpush


        <!--main area-->
        <main id="main" class="main-site left-sidebar">

            <div class="container">

                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="#" class="link">home</a></li>
                        <li class="item-link"><span>Digital & Electronics</span></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                        <div class="banner-shop">
                            <a href="#" class="banner-link">
                                <figure>
                                    <img src="{{ asset('assets/shop/templates/images/shop-banner.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>

                        {{-- 라이브와이어 --}}
                        @livewire('LiveProducts')

                    </div><!--end main products area-->

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                        @include('jiny-shop::products.sidebar',['categories'=>$categories])

                    </div><!--end sitebar-->

                </div><!--end row-->
            </div><!--end container-->

        </main>
        <!--main area-->


    </x-theme-layout>
</x-theme>
