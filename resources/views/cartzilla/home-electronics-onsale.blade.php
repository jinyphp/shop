<div>
    <!-- Sale Banner (CTA) -->
    <section class="container pt-5 mt-sm-2 mt-md-3 mt-lg-4">
        @foreach($rows as $item)
        <div class="row g-0">
            <div class="col-md-3 mb-n4 mb-md-0">
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 py-5">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-md-block">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark" style="background-color: #accbee"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark" style="background-color: #1b273a"></span>
                    </div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-md-none">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-top-5 d-none-dark" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-top-5 d-none d-block-dark" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                    </div>
                    <div class="position-relative z-1 display-1 text-dark-emphasis text-nowrap mb-0">
                        <span class="d-inline-block ms-n2">
                            <span class="d-block fs-1">{{ $item['description'] }}</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 position-relative">
                <div class="position-absolute top-0 start-0 h-100 overflow-hidden rounded-pill z-2 d-none d-md-block" style="color: var(--cz-body-bg); margin-left: -2px">
                    <svg width="4" height="436" viewBox="0 0 4 436" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 0L1.99998 436" stroke="currentColor" stroke-width="3" stroke-dasharray="8 12" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="position-relative">
                    <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                    <div class="row align-items-center position-relative z-2">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="text-center text-md-start py-md-5 px-4 ps-md-5 pe-md-0 me-md-n5">
                                <h3 class="text-uppercase fw-bold ps-xxl-3 pb-2 mb-1">{{ $item['title'] }}</h3>
                                <p class="text-body-emphasis ps-xxl-3 mb-0">time sale<span class="d-inline-block fw-semibold bg-white text-dark rounded-pill py-1 px-2">{{ $item['sale_start'] }} ~ {{ $item['sale_end'] }}
                                <div> to get best offer</div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center justify-content-md-end pb-5 pb-md-0">
                            <div class="me-xxl-4">
                                <img src="{{ $item['content'] }}" class="d-block rtl-flip" width="420">
                                <div class="d-none d-lg-block" style="margin-bottom: -9%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block" style="padding-bottom: 3%"></div>
        @endforeach
    </section>
</div>
