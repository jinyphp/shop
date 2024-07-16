
<x-navtab class="mb-3 nav-bordered">

    <!-- formTab -->
    <x-navtab-item class="show active" >
        <x-navtab-link class="rounded-0 active">
            <span class="d-none d-md-block">기본정보</span>
        </x-navtab-link>

        <x-form-hor>
            <x-form-label>활성화</x-form-label>
            <x-form-item>
                {!! xCheckbox()
                    ->setWire('model.defer',"forms.enable")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>베너 code</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.code")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>링크</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.link")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>



    </x-navtab-item>

    <x-navtab-item class="" >
        <x-navtab-link class="rounded-0">
            <span class="d-none d-md-block">이미지</span>
        </x-navtab-link>

        {{-- <x-form-hor>
            <x-form-label>이미지</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.image")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor> --}}
        <div class="mb-3">
            <label for="simpleinput" class="form-label">이미지</label>
            <input type="file" class="form-control"
                        wire:model.defer="forms.image">
            @if(isset($forms['image']))
            <div class="p-2">파일명: /{{$forms['image']}}</div>
            <img src="/{{$forms['image']}}" width="300px" alt="">
            @endif
        </div>

        <x-form-hor>
            <x-form-label>이미지 넓이</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.width")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>이미지 높이</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.height")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

    </x-navtab-item>

    <x-navtab-item class="" >
        <x-navtab-link class="rounded-0">
            <span class="d-none d-md-block">적용</span>
        </x-navtab-link>

        <x-form-hor>
            <x-form-label>시작일자</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.start")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>종료일자</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.end")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

        <x-form-hor>
            <x-form-label>설명</x-form-label>
            <x-form-item>
                {!! xInputText()
                    ->setWire('model.defer',"forms.description")
                    ->setWidth("standard")
                !!}
            </x-form-item>
        </x-form-hor>

    </x-navtab-item>
</x-navtab>
