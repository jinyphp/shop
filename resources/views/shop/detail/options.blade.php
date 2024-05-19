<div>
    <!-- Livewire loading indicator -->
    {{-- <x-loading-star /> --}}

    <span wire:click="openOptionSetting({{$product['id']}})">옵션설정</span>

    @if($admin)
    <x-popup-dialog maxWidth="7xl" wire:model="popupOptionSetting">
        <x-slot name="title">
            {{ __('옵션설정') }}
        </x-slot>
        <x-slot name="content">
            <table class="table">
                <thead>
                    <tr>
                        <th class="w-16">Id</th>
                        <th class="w-32">필수</th>
                        <th>옵션그룹</th>
                        <th>설명</th>
                        <th class="w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($optionList as $item)
                    <tr>
                        <td class="w-16">{{$item->id}}</td>
                        <td class="w-32">
                            @if(isset($optionRequire[ $item->id ]))
                                @if($optionRequire[ $item->id ])
                                    <span wire:click="disableRequire({{$item->id}})">*</span>
                                @else
                                    <span wire:click="enableRequire({{$item->id}})">_</span>
                                @endif
                            @endif
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td class="w-32">
                            @if(in_array($item->id, $poid))
                            <span class="cursor-pointer" wire:click="removeOption({{$item->id}})">
                                제거
                            </span>
                            @else
                            <span class="cursor-pointer" wire:click="addOption({{$item->id}})">
                                적용

                            </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
        <x-slot name="footer">
            <x-btn-second wire:click="closeOptionSetting">닫기</x-btn-second>
        </x-slot>
    </x-popup-dialog>
    @endif
</div>
