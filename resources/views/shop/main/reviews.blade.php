<div>
    <div class="list-group">
        @foreach($rows as $item)
        <a href="javascript:void(0)" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">제목: {{ $item['title'] }}</h5>
                <small class="@if(!$loop->first) text-muted @endif">유저: {{ $item['username'] }}</small>
            </div>
            <h5 class="mb-1">상품: {{ $item['product'] }}</h5>
            <p class="mb-1">별점: {{ $item['rank'] }}</p>
            <p class="mb-1">내용: {{ $item['review'] }}</p>
        </a>
        @endforeach
    </div>
</div>
