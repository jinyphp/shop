{{-- <x-www-layout>
    <div>
        @livewire('CartzillaLiveSliders')
    </div>
    <div>
        @livewire('CartzillaLiveOnsale')
    </div>
    <div class="row">
        @livewire('CartzillaLiveBanners')
        @livewire('CartzillaLivenewArrivals')
    </div>

</x-www-layout> --}}

{{-- <x-www-layout>
    <div>
        @livewire('CartzillaLiveSliders')
    </div>
    <div>
        @livewire('CartzillaLiveOnsale')
    </div>
    <div class="row">
        @livewire('CartzillaLiveBanners')
        @livewire('CartzillaLivenewArrivals')
    </div>
</x-www-layout> --}}
<x-www-layout>
    <div>
        @livewire('CartzillaLiveSliders')
    </div>
    <div>
        @livewire('CartzillaLiveOnsale')
    </div>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <div style="flex: 1 1 48%; max-width: 48%; box-sizing: border-box;">
            @livewire('CartzillaLiveBanners')
        </div>
        <div style="flex: 1 1 48%; max-width: 48%; box-sizing: border-box;">
            @livewire('CartzillaLivenewArrivals')
        </div>
    </div>
</x-www-layout>





