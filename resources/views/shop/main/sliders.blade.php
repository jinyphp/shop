<div class="wrap-main-slide">
    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">

        @foreach($sliders as $slider)
        <div class="item-slide">
            <img src="{{ asset('/images/sliders') }}/{{$slider->image}}" alt="" class="img-slide">
            <div class="slide-info slide-1">
                <h2 class="f-title">{{$slider->title}}</h2>
                <span class="subtitle">{{$slider->subtitle}}</span>
                <p class="sale-info">Only price: <span class="price">${{$slider->price}}</span></p>
                <a href="{{$slider->link}}" class="btn-link">Shop Now</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

