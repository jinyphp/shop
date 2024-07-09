<style>
    .card-container {
        display: flex;
        width: 100%;
    }
    .card-container .card {
        flex: 1;
        margin: 0 5px; /* 카드 간격을 설정합니다. 필요에 따라 조정 가능합니다. */
    }
    .card-img-top {
        height: 200px; /* 이미지 높이를 적절히 설정합니다. 필요에 따라 조정 가능합니다. */
        object-fit: cover;
    }
    .card-body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%; /* 본문을 카드 전체 높이로 설정 */
        position: absolute; /* 본문을 카드 중앙에 배치하기 위한 절대적 위치 설정 */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        color: white; /* 텍스트 색상을 하얀색으로 설정 */
        background-color: rgba(0, 0, 0, 0.5); /* 배경색을 반투명 검은색으로 설정 */
        text-align: center;
    }
</style>

<div class="container-fluid">
    <div class="card-container">
        @foreach($rows as $item)
        <div class="card">
            <img src="{{ $item['image'] }}" class="card-img-top">
            <div class="card-footer">
                <p class="card-text">{{ $item['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>




{{-- <style>
    .card {
        height: 100vh; /* 카드 높이를 화면 높이로 설정 */
    }
    .card-img-top {
        height: 100%;
        object-fit: cover; /* 이미지가 카드 전체를 덮도록 설정 */
    }
</style>
<div>
    <div class="container-fluid">
        <div class="row">
            @foreach($rows as $item)
            <div class="col-md-4 p-0">
                <div class="card h-100">
                    <img src="{{ $item['image'] }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">{{ $item['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}


