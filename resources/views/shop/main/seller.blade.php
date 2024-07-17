<div>
    <div class="list-group">
        @foreach($rows as $item)
        <a href="javascript:void(0)" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">seller: {{ $item['seller'] }}</h5>
            </div>
            <h5 class="mb-1">이메일: {{ $item['email'] }}</h5>
            <p class="mb-1">title: {{ $item['title'] }}</p>
            <p class="mb-1">phone: {{ $item['phone'] }}</p>
        </a>
        @endforeach
    </div>
</div>
