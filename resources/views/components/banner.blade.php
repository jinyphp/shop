<div class="banner-item">
    @if($item)
    <a href="{{$item->link}}" class="link-banner banner-effect-1">
        <figure>
            <img src="{{ asset($item->image) }}" alt=""
            @if($item->width)
            width="{{$item->width}}"
            @endif

            @if($item->height)
            height="{{$item->height}}"
            @endif
            >
        </figure>
    </a>
    @endif
</div>
