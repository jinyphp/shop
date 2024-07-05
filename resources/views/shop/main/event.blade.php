{{--링크 없는 버전--}}
<div>
    <div class="list-group">
        @foreach($rows as $item)
        <a href="javascript:void(0)" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $item['product'] }}</h5>
                <small class="@if(!$loop->first) text-muted @endif">{{ $item['expire'] }}</small>
            </div>
            <p class="mb-1">{{ $item['discount'] }}</p>
            <p class="mb-1">{{ $item['type'] }}</p>
            <small class="@if(!$loop->first) text-muted @endif">{{ $item['max_count'] }}</small>
        </a>
        @endforeach
    </div>
</div>

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


