<section class="bg-body-tertiary py-5">
    <div class="container py-1 py-sm-2 py-md-3 py-lg-4 py-xl-5">
      <h2 class="text-center pb-2 pb-md-3 pb-lg-4 pt-xxl-3">Happy customers</h2>
      <div class="position-relative pb-xxl-3">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button" class="btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle d-none d-sm-inline-flex mt-n4" id="reviewsPrev" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 start-100 z-2 translate-middle d-none d-sm-inline-flex mt-n4" id="reviewsNext" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper" data-swiper='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": "#reviewsPrev",
            "nextEl": "#reviewsNext"
          },
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "600": {
              "slidesPerView": 2
            },
            "992": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Loop through the rows passed from the controller -->
            @foreach($rows as $review)
            <div class="swiper-slide h-auto">
              <div class="card h-100 border-0 rounded-4 p-sm-2">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                      <!-- Use the product image from the review -->
                      <img src="{{ $review['product_image'] }}" width="80" alt="Product Image">
                    </div>
                    <div class="ps-2 ms-1">
                      <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                        @for ($i = 0; $i < 5; $i++)
                          @if ($i < $review['rating'])
                            <i class="ci-star-filled text-warning"></i>
                          @else
                            <i class="ci-star text-body-tertiary opacity-75"></i>
                          @endif
                        @endfor
                      </div>
                      <h3 class="h6 mb-0">{{ $review['title'] }}</h3>
                    </div>
                  </div>
                  <p class="mb-0">{{ $review['comment'] }}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>

          <!-- Pagination (Bullets) -->
          <div class="swiper-pagination position-static pt-3 mt-sm-1 mt-md-2 mt-lg-3"></div>
        </div>
      </div>
    </div>
  </section>



