<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>

            {{-- <div class="mb-3">
                <label for="simpleinput" class="form-label">이미지</label>
                <input type="file" class="form-control"
                            wire:model.defer="forms.image">
                <p>
                    @if(isset($forms['image']))
                    {{$forms['image']}}
                    @endif
                </p>
            </div> --}}


            <x-form-hor>
                <x-form-label>활성화</x-form-label>
                <x-form-item>
                    {!! xCheckbox()
                        ->setWire('model.defer',"forms.enable")
                    !!}
                </x-form-item>
            </x-form-hor>


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
                <x-form-label>제목</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.title")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>subtitle</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.subtitle")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>price</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.price")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>link</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.link")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>status</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.status")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>


        </x-navtab-item>

    </x-navtab>
</div>
