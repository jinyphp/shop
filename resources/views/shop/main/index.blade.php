<x-www-layout>
    <!--MAIN SLIDE-->
    <div class="container">
        @livewire('LiveSliders')
    </div>

    <!--BANNER-->
    <div class="wrap-banner style-twin-default">
        <x-jiny-banner code="001">
        </x-jiny-banner>
        <x-jiny-banner code="002">
        </x-jiny-banner>
    </div>

    <!--On Sale-->
    @livewire('LiveOnSale')


    <!--Latest Products-->
    @livewire('LiveLastProduct')

    <!--Product Categories-->
    @livewire('LiveMainCate')


</x-www-layout>

