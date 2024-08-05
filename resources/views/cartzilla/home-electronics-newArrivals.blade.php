<div class="container">
    <div class="row d-flex flex-wrap">
        @foreach ($rows as $index => $row)
            <div class="col-md-6 d-flex flex-column gap-3 pt-4 py-lg-4">
                <!-- Item -->
                <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
                    <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                        <img src="{{ $row['image'] }}" alt="{{ $row['name'] }}">
                    </div>
                    <div class="w-100 min-w-0 ps-2 ps-sm-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="d-flex gap-1 fs-xs">
                                @php
                                    $averageRating = round($row['average_rating'], 1);
                                @endphp
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="{{ $i < floor($averageRating) ? 'ci-star-filled text-warning' : 'ci-star text-body-tertiary opacity-75' }}"></i>
                                @endfor
                            </div>
                            <span class="text-body-tertiary fs-xs">{{ $averageRating }}</span>
                        </div>
                        <h4 class="mb-2">
                            <a class="stretched-link d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics">
                                <span class="animate-target">{{ $row['name'] }}</span>
                            </a>
                        </h4>
                        <div class="h5 mb-0">${{ $row['regular_price'] }}</div>
                    </div>
                </div>
            </div>
            @if (($index + 1) % 2 == 0)
                <div class="w-100"></div>
            @endif
        @endforeach
    </div>
</div>







