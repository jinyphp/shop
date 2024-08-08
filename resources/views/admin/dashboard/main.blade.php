<!-- dash info -->
@includeIf('jiny-site::admin.dashboard.users', [])


<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            <a href="/admin/shop/orders">주문내역</a>

                        </h5>
                        <h6 class="card-subtitle text-muted">
                            주문을 확인합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">

                <a href="/admin/shop/shipping">
                    <x-badge-info>배송내역</x-badge-info>
                </a>

                <a href="/admin/shop/address">
                    <x-badge-info>배송주소</x-badge-info>
                </a>

            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            주문관리
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            주문된 상품을 처리합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">

                <a href="/admin/shop/shipping/method">
                    <x-badge-info>배송방식</x-badge-info>
                </a>



                <a href="/admin/shop/payment">
                    <x-badge-info>결제관리</x-badge-info>
                </a>





            </div>
        </div>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            구성요쇼
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            쇼핑몰을 구현한하기 위한 구성모듈입니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">

                <a href="/admin/shop/sliders">
                    <x-badge-info>슬라이더</x-badge-info>
                </a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            마케팅
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            다양한 판매 행사를 기획합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/onsale">
                    <x-badge-info>할인기획</x-badge-info>
                </a>

                <a href="/admin/shop/banners">
                    <x-badge-info>베너</x-badge-info>
                </a>

                <a href="/admin/shop/contact">
                    <x-badge-info>contact</x-badge-info>
                </a>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">

                        </h5>
                        <h6 class="card-subtitle text-muted">

                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            쇼핑몰 회원관리
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            쇼핑몰 회원을 관리합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/user/address">
                    <x-badge-info>주소록</x-badge-info>
                </a>

                <a href="/admin/shop/membership">
                    <x-badge-info>맴버쉽</x-badge-info>
                </a>

                <a href="/admin/shop/user/grade">
                    <x-badge-info>등급</x-badge-info>
                </a>

                <a href="/admin/shop/user/phone">
                    <x-badge-info>핸드폰</x-badge-info>
                </a>

            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            예치/적립금
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            회원별 적립금을 관리합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/bank">
                    <x-badge-info>고객계좌</x-badge-info>
                </a>

                <a href="/admin/shop/user/cash">
                    <x-badge-info>예치금</x-badge-info>
                </a>

                <a href="/admin/shop/user/money">
                    <x-badge-info>적립금</x-badge-info>
                </a>


                <a href="/admin/shop/user/point">
                    <x-badge-info>포인트</x-badge-info>
                </a>


            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            분쟁조정
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            회원별 구매상품에 대한 분쟁을 조정합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/dispute">
                    <x-badge-info>분쟁목록</x-badge-info>
                </a>

                <a href="/admin/shop/dispute/history">
                    <x-badge-info>분쟁이력</x-badge-info>
                </a>
            </div>
        </div>
    </div>

</div>
<hr>
<div class="row">
    {{-- 상품관리 --}}
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            <a href="/admin/shop/products">
                            상품관리
                            </a>
                            (등록: {{table_enable_count('shop_products')}} of {{table_count('shop_products')}})
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            상품을 등록 관리 합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/product/price/type">
                    <x-badge-info>가격유형</x-badge-info>
                </a>

                <a href="/admin/shop/product/prices">
                    <x-badge-primary>가격이력</x-badge-primary>
                </a>

                <a href="/admin/shop/goods/images">
                    <x-badge-primary>이미지</x-badge-primary>
                </a>

                <a href="/admin/shop/goods/options">
                    <x-badge-primary>옵션</x-badge-primary>
                </a>

            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            <a href="/admin/shop/reviews">
                                상품리뷰
                            </a>

                        </h5>
                        <h6 class="card-subtitle text-muted">
                            상품을 관리합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>


    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            <a href="/admin/shop/category">
                            카테고리
                            </a>
                            (등록: {{table_enable_count('shop_categories')}}
                                of {{table_count('shop_categories')}})
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            등록된 상품을 분류합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/brands">
                    <x-badge-primary>브렌드</x-badge-primary>
                </a>
            </div>
        </div>
    </div>

</div>

<hr>

<div class="row">


    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            쇼핑몰 관리
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            쇼핑몰의 공통 데이터를 관리합니다.
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">
                <a href="/admin/shop/currency">
                    <x-badge-primary>환율</x-badge-primary>
                </a>

                <a href="/admin/shop/seller">
                    <x-badge-primary>판매자</x-badge-primary>
                </a>

                <a href="/admin/shop/manager">
                    <x-badge-primary>관리자</x-badge-primary>
                </a>

                <a href="/admin/shop/manager/roles">
                    <x-badge-primary>관리역할</x-badge-primary>
                </a>


            </div>
        </div>


    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <x-flex-between>
                    <div>
                        <h5 class="card-title">
                            <a href="/admin/shop/setting">
                            쇼핑몰 설정
                            </a>
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            ...
                        </h6>
                    </div>
                    <div>
                        @icon("info-circle.svg")
                    </div>
                </x-flex-between>
            </div>
            <div class="card-body">


            </div>
        </div>
    </div>
</div>


<!-- Dashboard Content-->
@includeIf('jiny-site::admin.dashboard.cms', [])

<hr>

@includeIf('jiny-site::admin.dashboard.site', [])
