<x-theme theme="admin.sidebar">
    <x-theme-layout>

        <h1>기본정보</h1>

        <x-card>
            <x-card-header>
                기본정보
            </x-card-header>
            <x-card-body>

                <x-navtab class="mb-3 nav-bordered">

                    <!-- formTab -->
                    <x-navtab-item class="show active" >

                        <x-navtab-link class="rounded-0 active">
                            <span class="d-none d-md-block">기본정보</span>
                        </x-navtab-link>

                        {{--
                        <x-form-hor>
                            <x-form-label>활성화</x-form-label>
                            <x-form-item>
                                {!! xCheckbox()
                                    ->setWire('model.defer',"forms.enable")
                                !!}
                            </x-form-item>
                        </x-form-hor>
                        --}}

                        <x-form-hor>
                            <x-form-label>회사명</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.companyName")
                                    ->setAttribute('placeholder',"회사명입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>대표자명</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.representative.name")
                                    ->setAttribute('placeholder',"대표자명 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>사업자등록번호</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.business.registrationNo")
                                    ->setAttribute('placeholder',"사업자등록번호 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>대표전화번호</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.representative.phoneNo")
                                    ->setAttribute('placeholder',"대표전화번호 - 없이 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>대표이메일</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.emailId")
                                    ->setAttribute('placeholder',"")
                                    ->setWidth("standard")
                                !!}
                                <span class="sign-mid">@</span>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.emailDomain")
                                    ->setAttribute('placeholder',"")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>팩스번호</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.faxNo")
                                    ->setAttribute('placeholder',"팩스번호 - 없이 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>업종</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.business.type")
                                    ->setAttribute('placeholder',"업종 입력")
                                    ->setWidth("standard")
                                !!}
                                <span data-v-74e08c01="" class="count">0</span>/50</span>
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>업태</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.business.condition")
                                    ->setAttribute('placeholder',"업태 입력")
                                    ->setWidth("standard")
                                !!}
                                <span data-v-74e08c01="" class="count">0</span>/50</span>
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>사업장 주소</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.address.zipCode")
                                    ->setAttribute('placeholder',"우편번호")
                                    ->setWidth("standard")
                                !!}
                                <button type="button" class="double_click_allow type-white">우편번호 찾기</button>
                            </x-form-item>
                        </x-form-hor>


                    </x-navtab-item>

                    <!-- formTab -->
                    <x-navtab-item class="" >
                        <x-navtab-link class="rounded-0 ">
                            <span class="d-none d-md-block">개인정보보호책임자</span>
                        </x-navtab-link>

                        <x-form-hor>
                            <x-form-label>보호책임자 이름
                                <div class="tool-tip">
                                    <span style="white-space: pre;">쇼핑몰 하단 개인정보처리담당자로 출력됩니다.
                                    전자상거래법 준수를 위해 해당 항목을 반드시 입력해주세요.</span>
                                </div>

                            </x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.privacyManager.name")
                                    ->setAttribute('placeholder',"이름 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>보호책임자 전화번호</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.privacyManager.phoneNo")
                                    ->setAttribute('placeholder',"전화번호 - 없이 입력")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>보호책임자 소속/직위</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.privacyManager.team")
                                    ->setAttribute('placeholder',"소속 입력")
                                    ->setWidth("standard")
                                !!}
                                /
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.privacyManager.position")
                                    ->setAttribute('placeholder',"직위")
                                    ->setWidth("standard")
                                !!}
                            </x-form-item>
                        </x-form-hor>

                        <x-form-hor>
                            <x-form-label>보호책임자 이메일</x-form-label>
                            <x-form-item>
                                {!! xInputText()
                                    ->setWire('model.defer',"forms.emailId")
                                    ->setAttribute('placeholder',"전화번호 - 없이 입력")
                                    ->setWidth("standard")
                                !!}
                                <span class="sign-mid">@</span>
                            </x-form-item>
                        </x-form-hor>

                    </x-navtab-item>

                </x-navtab>

            </x-card-body>
        </x-card>



    </x-theme-layout>
</x-theme>
