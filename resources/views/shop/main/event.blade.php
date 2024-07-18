<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($rows as $item)
    <div class="col">
        <div class="card h-100">
            <img src="{{ $item['product'] }}" class="card-img-top" alt="{{ $item['product'] }}">
            <div class="card-footer">
                <h5 class="card-title">
                    <a href="/shop/detail/{{ $item['product_id'] }}" class="fw-bolder">{{ $item['product'] }}</a>
                </h5>
                <p class="card-text">{{ $item['type'] }}</p>
                <small class="text-body-secondary">종료일 {{ $item['expire'] }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>


{{--링크 없는 버전--}}
{{-- <div>
    <div class="list-group">
        @foreach($rows as $item)
        <a href="javascript:void(0)" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">상품: {{ $item['product'] }}</h5>
                <small class="@if(!$loop->first) text-muted @endif">만료일자: {{ $item['expire'] }}</small>
            </div>
            <p class="mb-1">할인가: {{ $item['discount'] }}</p>
            <p class="mb-1">할인 타입: {{ $item['type'] }}</p>
            <small class="@if(!$loop->first) text-muted @endif">최대 수량: {{ $item['max_count'] }}</small>
        </a>
        @endforeach
    </div>
</div> --}}


{{--링크 있는 버전--}}
{{-- <div class="list-group">
    @foreach($items as $item)
    <a href="{{ $item['link'] }}" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $item['heading'] }}</h5>
            <small class="@if(!$loop->first) text-muted @endif">{{ $item['date'] }}</small>
        </div>
        <p class="mb-1">{{ $item['content'] }}</p>
        <small class="@if(!$loop->first) text-muted @endif">{{ $item['footer'] }}</small>
    </a>
    @endforeach
</div> --}}


