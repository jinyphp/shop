<div>
    <h1>쇼핑몰등록</h1>
    <p>
        쉽고 빠른 등록을 위해 쇼핑몰 신규 등록 시 간소화된 항목을 제공합니다.
        등록 이후 [서비스 관리 -> 쇼핑몰관리 -> 쇼핑몰 수정] 페이지에서 운영과 관련된 세부 설정 사항들을 수정하여 관리할 수 있습니다.
    </p>


    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">쇼핑몰 기본정보</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>쇼핑몰명</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.mall.mallName")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>
                    쇼핑몰주소
                    <span style="white-space: pre;">· 입력한 정보로 쇼핑몰의 PC/모바일 도메인 주소가 기본 생성됩니다.</span>
                </x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.mall-address")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>고객센터 전화번호</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.serviceCenter.phoneNo")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>고객센터 이메일</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.representative.email")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>

        <x-navtab-item class="" >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">계좌정보</span>
            </x-navtab-link>

            <span style="white-space: pre;">계좌정보 설정은 쇼핑몰 반영 시까지 일정 시간이 소요될 수 있습니다.</span>

            <x-form-hor>
                <x-form-label>은행명</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.height")
                        ->setWidth("standard")
                    !!}

<select disabled="disabled"
style="width: 130px; margin-right: 8px;">
<!---->
<option value=""> 은행선택 </option>
<option value="KDB"> 산업은행 </option>
<option value="IBK"> 기업은행 </option>
<option value="KB"> 국민은행 </option>
<option value="SUHYUP"> 수협 </option>
<option value="KEXIM"> 수출입은행 </option>
<option value="NH"> NH농협은행 </option>
<option value="NHLOCAL"> 지역농축협 </option>
<option value="WOORI"> 우리은행 </option>
<option value="SC"> SC제일은행 </option>
<option value="CITY"> 한국씨티은행 </option>
<option value="DAEGU"> 대구은행 </option>
<option value="PUSAN"> 부산은행 </option>
<option value="GWANGJU"> 광주은행 </option>
<option value="JEJU"> 제주은행 </option>
<option value="JEONBUK"> 전북은행 </option>
<option value="GYEONGNAM"> 경남은행 </option>
<option value="KFCC"> 새마을금고 </option>
<option value="CU"> 신협 </option>
<option value="SANGHO"> 상호저축은행 </option>
<option value="HSBC"> HSBC은행 </option>
<option value="DEUTSCHE"> 도이치은행 </option>
<option value="NFCF"> 산림조합중앙회 </option>
<option value="EPOST"> 우체국 </option>
<option value="KEBHANA"> KEB하나은행 </option>
<option value="SHINHAN"> 신한은행 </option>
<option value="KBANK"> 케이뱅크 </option>
<option value="KAKAO"> 카카오뱅크 </option>
<option value="YUANTA"> 유안타증권 </option>
<option value="KBSEC"> KB증권 </option>
<option value="MIRAEDAEWOO"> 미래에셋대우증권 </option>
<option value="SAMSUNG"> 삼성증권 </option>
<option value="HANKOOK"> 한국투자증권 </option>
<option value="NH_INVEST"> NH투자증권 </option>
<option value="KYOBO"> 교보증권 </option>
<option value="HI_INVEST"> 하이투자증권 </option>
<option value="HMC_INVEST"> HMC투자증권 </option>
<option value="KIWOOM"> 키움증권 </option>
<option value="EBEST"> 이베스트투자증권 </option>
<option value="SK"> SK증권 </option>
<option value="DAISHIN"> 대신증권 </option>
<option value="HANHWA"> 한화투자증권 </option>
<option value="HANA_INVEST"> 하나금융투자 </option>
<option value="SHINHAN_INVEST"> 신한금융투자 </option>
<option value="DONGBU"> DB금융투자 </option>
<option value="EUGENE_INVEST"> 유진투자증권 </option>
<option value="MERITZ_COMPREHENSIVE"> 메리츠종합금융증권 </option>
<option value="BOOKOOK"> 부국증권 </option>
<option value="SHINYOUNG"> 신영증권 </option>
<option value="CAPE"> 케이프투자증권 </option>
</select>

                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>계좌번호</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.bankAccount")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>예금주</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.bankDepositorName")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

        </x-navtab-item>

        <x-navtab-item class="" >
            <x-navtab-link class="rounded-0">
                <span class="d-none d-md-block">장바구니 설정</span>
            </x-navtab-link>


            <x-form-hor>
                <x-form-label>보존기한</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.storagePeriodNoLimit")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>보존수량</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.description")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>동일 옵션 표기단위</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.description")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>


        </x-navtab-item>

    </x-navtab>
</div>
