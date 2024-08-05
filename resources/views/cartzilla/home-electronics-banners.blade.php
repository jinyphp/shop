
<section class="container pt-5 mt-1 mt-sm-2 mt-md-3 mt-lg-4">
    <h2 class="h3 pb-2 pb-sm-3">New arrivals</h2>
    <div class="row">
        @foreach ($rows as $banner)
        <!-- Banner -->
        <div class="col-lg-4 mb-4" data-bs-theme="dark">
            <div class="d-flex flex-column align-items-center justify-content-end h-100 text-center overflow-hidden rounded-5 px-4 px-lg-3 pt-4 pb-5" style="background: #1d2c41 url(/assets/img/home/electronics/banner/background.jpg) center/cover no-repeat">
                <div class="ratio animate-up-down position-relative z-2 me-lg-4" style="max-width: 320px; margin-bottom: -19%; --cz-aspect-ratio: calc(690 / 640 * 100%)">
                    <img src="{{ $banner['image'] }}">
                </div>
                <h3 class="display-2 mb-2">{{ $banner['description'] }}</h3>
                <p class="text-body fw-medium mb-4">{{ $banner['description'] }}</p>
                <a class="btn btn-sm btn-primary" href="{{ $banner['link'] }}">
                    {{ $banner['description'] }}
                    <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>






