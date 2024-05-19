<!-- Categories widget-->
<div class="widget mercado-widget categories-widget">
    <h2 class="widget-title">All Categories</h2>
    <div class="widget-content">
        <ul class="list-category">

            @foreach($categories as $category)
            <li class="category-item">
                <a href="{{route('shop.category',['slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Categories widget-->


<!-- brand widget-->
<div class="widget mercado-widget filter-widget brand-widget">
    <h2 class="widget-title">Brand</h2>
    <div class="widget-content">
        <ul class="list-style vertical-list list-limited" data-show="6">
            <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
            <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
            <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
            <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
            <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
            <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
            <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
            <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
            <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
            <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
            <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
<!-- brand widget-->


<!-- Price-->
<div class="widget mercado-widget filter-widget price-filter">
    <h2 class="widget-title">Price</h2>
    <div class="widget-content">
        {{--
        <div id="slider-range"></div>
        <p>
            <label for="amount">Price:</label>
            <input type="text" id="amount" readonly>
            <button class="filter-submit">Filter</button>
        </p>
        --}}

        <div id="slider" wire:ignore>

        </div>
        @push('scripts')
        <script>
            var slider = document.getElementById('slider');
            noUiSlider.create(slider,{
                start:[1,1000],
                connect:true,
                range:{
                    'min':1,
                    'max':1000
                },
                pips:{
                    mode:'steps',
                    stepped:true,
                    density:4
                }
            })
        </script>
        @endpush
    </div>
</div>
<!-- Price-->

<!-- Color -->
<div class="widget mercado-widget filter-widget">
    <h2 class="widget-title">Color</h2>
    <div class="widget-content">
        <ul class="list-style vertical-list has-count-index">
            <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
            <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
            <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
            <li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
            <li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
            <li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
        </ul>
    </div>
</div>
<!-- Color -->

<!-- Size -->
<div class="widget mercado-widget filter-widget">
    <h2 class="widget-title">Size</h2>
    <div class="widget-content">
        <ul class="list-style inline-round ">
            <li class="list-item"><a class="filter-link active" href="#">s</a></li>
            <li class="list-item"><a class="filter-link " href="#">M</a></li>
            <li class="list-item"><a class="filter-link " href="#">l</a></li>
            <li class="list-item"><a class="filter-link " href="#">xl</a></li>
        </ul>
        <div class="widget-banner">
            <figure>
                <img src="{{ asset('assets/shop/templates/images/size-banner-widget.jpg') }}" width="270" height="331" alt="">
            </figure>
        </div>
    </div>
</div>
<!-- Size -->


<!-- brand widget-->
<div class="widget mercado-widget widget-product">
    <h2 class="widget-title">Popular Products</h2>
    <div class="widget-content">
        <ul class="products">
            <li class="product-item">
                <div class="product product-widget-style">
                    <div class="thumbnnail">
                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                            <figure><img src="{{ asset('assets/shop/templates/images/products/digital_01.jpg') }}" alt=""></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                    </div>
                </div>
            </li>

            <li class="product-item">
                <div class="product product-widget-style">
                    <div class="thumbnnail">
                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                            <figure><img src="{{ asset('assets/shop/templates/images/products/digital_17.jpg') }}" alt=""></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                    </div>
                </div>
            </li>

            <li class="product-item">
                <div class="product product-widget-style">
                    <div class="thumbnnail">
                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                            <figure><img src="{{ asset('assets/shop/templates/images/products/digital_18.jpg') }}" alt=""></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                    </div>
                </div>
            </li>

            <li class="product-item">
                <div class="product product-widget-style">
                    <div class="thumbnnail">
                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                            <figure><img src="{{ asset('assets/shop/templates/images/products/digital_20.jpg') }}" alt=""></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- brand widget-->
