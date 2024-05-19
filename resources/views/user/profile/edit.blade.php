<div>

    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel-heading">
                Profile Edit
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    @if(isset($user->profile->image) && $user->profile->image)
                        <img src="{{asset('images/profile')}}/{{$user->profile->image}}" width="100%" alt="" />
                    @else
                        이미지없음
                        <img src="{{asset('images/profile')}}/dummy_1.jpg" alt="">
                    @endif
                </div>
                <div class="col-md-8">
                    <x-form-hor>
                        <x-form-label>이름</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.name")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Email</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.email")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Mobile</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.mobile")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Line1</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.line2")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Line2</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.line2")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>City</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.city")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Province</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.province")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>Country</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.country")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>

                    <x-form-hor>
                        <x-form-label>ZipCode</x-form-label>
                        <x-form-item>
                            {!! xInputText()
                                ->setWire('model.defer',"forms.zipcode")
                                ->setWidth("standard")
                            !!}
                        </x-form-item>
                    </x-form-hor>
                </div>
            </div>
        </div>
    </div>
</div>
