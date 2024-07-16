<x-theme theme="admin.sidebar">
    {{-- 설정 파일을 생성할 수 있는 출력 템플릿 --}}
    <x-theme-layout>



        @livewire('WireConfigPHP', ['actions'=>$actions])


    </x-theme-layout>
</x-theme>
