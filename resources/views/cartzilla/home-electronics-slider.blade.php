<div>
    <main class="content-wrapper">
        <!-- Hero slider -->
        <section class="container pt-4">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="position-relative">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
                            style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="row justify-content-center position-relative z-2">
                            <div class="col-xl-5 col-xxl-4 offset-xxl-1 d-flex align-items-center mt-xl-n3">

                                <!-- Text content master slider -->
                                <div class="swiper px-5 pe-xl-0 ps-xxl-0 me-xl-n5" data-swiper='{
                                    "spaceBetween": 64,
                                    "loop": true,
                                    "speed": 400,
                                    "controlSlider": "#sliderImages",
                                    "autoplay": {
                                        "delay": 5500,
                                        "disableOnInteraction": false
                                    },
                                    "scrollbar": {
                                        "el": ".swiper-scrollbar"
                                    }
                                }'>
                                    <div class="swiper-wrapper">
                                        @foreach($rows as $item)
                                            <div class="swiper-slide text-center text-xl-start pt-5 py-xl-5">
                                                <p class="text-body">{{ $item['subtitle'] }}</p>
                                                <h2 class="display-4 pb-2 pb-xl-4">{{ $item['title'] }}</h2>
                                                <a class="btn btn-lg btn-primary" href="{{ $item['link'] }}">
                                                    Shop now
                                                    <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-7">
                                <!-- Binded images (controlled slider) -->
                                <div class="swiper user-select-none" id="sliderImages" data-swiper='{
                                    "allowTouchMove": false,
                                    "loop": true,
                                    "effect": "fade",
                                    "fadeEffect": {
                                        "crossFade": true
                                    }
                                }'>
                                    <div class="swiper-wrapper">
                                        @foreach($rows as $item)
                                            <div class="swiper-slide d-flex justify-content-end">
                                                <div class="ratio rtl-flip"
                                                    style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                                                    <img src="{{ $item['price'] }}" alt="Image">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scrollbar -->
                        <div class="row justify-content-center" data-bs-theme="dark">
                            <div class="col-xxl-10">
                                <div class="position-relative mx-5 mx-xxl-0">
                                    <div class="swiper-scrollbar mb-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


