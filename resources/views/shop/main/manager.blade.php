<div>
    <div class="list-group">
        @foreach($rows as $item)
        <a href="javascript:void(0)" class="list-group-item list-group-item-action @if($loop->first) active @endif" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">이름: {{ $item['name'] }}</h5>
            </div>
            <h5 class="mb-1">이메일: {{ $item['email'] }}</h5>
            <p class="mb-1">역할: {{ $item['role'] }}</p>
            <p class="mb-1">상위관리자: {{ $item['manager'] }}</p>
        </a>
        @endforeach
    </div>
</div>
