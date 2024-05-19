<x-theme theme="shop.templates">
    <x-theme-layout>

        <h1>Shop :: User Dashboard</h1>

        <a href="/shop/user/password/change">비밀번호 변경</a>


        <div class="row">
            <div class="col-3">
                totalCost : {{$totalCost}}
            </div>
            <div class="col-3">
                totalPurchas: {{$totalPurchase}}
            </div>
            <div class="col-3">
                totalDelivery : {{$totalDelivery}}
            </div>
            <div class="col-3">
                totalCanceled : {{$totalCanceled}}
            </div>

        </div>

        <div class="row">
            주문목록
            @foreach($orders as $order)
            @endforeach
        </div>

        <hr>

        <div class="row">
            <div>
                마이쇼핑
            </div>
        </div>
        <div class="row">
            <div>쿠폰:0장</div>
            {{--
            <div>적립금 : {{DB::table('user_money')->where('user_id',Auth::user()->id)->first()->balance}}원</div>
            <div>포인트 : {{DB::table('user_point')->where('user_id',Auth::user()->id)->first()->balance}}</div>
            --}}
            <div>무료배송:0장</div>
            <div>무료반품:0장</div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3">
                내정보

                <hr>

                쇼핑내역
                <ul>
                    <li>전체주문내역</li>
                    <li>여행</li>
                    <li>항공권</li>
                    <li>티켓</li>
                    <li>ebay쇼핑</li>
                    <li>주문취소/교환/반품내역</li>
                    <li>경매내역</li>
                </ul>
                구매활동
                <ul>
                    <li>관심상품</li>
                    <li>단골판매자</li>
                    <li>상품문의</li>
                    <li>구매후기 작성</li>
                    <li>내가쓴 구매후기</li>
                    <li>이벤트 응모당첨</li>
                </ul>
                <hr>
                계좌내역
                예치금
                가족계좌
                <ul>
                    <li>쿠폰</li>
                    <li>스마일페이</li>
                    <li>스마일캐시</li>
                    <li>스마일포인트</li>
                    <li>무료배송쿠폰</li>
                    <li>무료반품쿠폰</li>
                    <li>해피쪽지</li>
                </ul>
                회원정보
                <ul>
                    <li>회원정보수정</li>
                    <li>회원상태</li>
                    <li>경매별차감</li>
                    <li>회원등급</li>
                    <li>배송주소록</li>
                    <li>개인정보이용내역</li>
                </ul>

                중고판매
                내가게 중고 판매
                나의 중고 나눔

                <hr>
                계산서발행
                견적서 발송

                <hr>
                예약관리

                <hr>
                보상신청
                지연보상신청
                파손보상신청

                <hr>
                분쟁신청

                대량주문

            </div>
            <div class="col-md-9">
                최근 주문내역
                입금대기, 결제완료, 배송준비중, 배송, 배송완료, 구매결정대기, 교환, 반품내역
                <hr>

            </div>
        </div>





    </x-theme-layout>
</x-theme>
