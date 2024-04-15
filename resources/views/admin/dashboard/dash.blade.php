@setTheme("admin.sidebar")
<x-theme theme="admin.sidebar">
    <x-theme-layout>

        <div class="d-flex justify-content-between my-2">
            <div class="">
                <h3>
                @if(isset($actions['title']))
                    {{$actions['title']}}
                @endif
                </h3>
                <div class="lead text-center" style="font-size: 1rem;">
                @if(isset($actions['subtitle']))
                    {{$actions['subtitle']}}
                @endif
                </div>
            </div>
            <div class="flex justify-content-end align-items-top">

                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/admin/shop">Shop</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Dashbaord
                    </li>
                </ol>

            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <x-flex-between>
                            <div>
                                <h5 class="card-title">
                                    <a href="/admin/shop/setting">
                                    설정
                                    </a>
                                </h5>
                                <h6 class="card-subtitle text-muted">
                                    ...
                                </h6>
                            </div>
                            <div>
                                @icon("info-circle.svg")
                            </div>
                        </x-flex-between>
                    </div>
                    <div class="card-body">


                    </div>
                </div>
            </div>









        </div>




    </x-theme-layout>
</x-theme>

