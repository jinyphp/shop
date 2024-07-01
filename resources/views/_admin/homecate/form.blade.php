<div>
    <x-navtab class="mb-3 nav-bordered">

        <!-- formTab -->
        <x-navtab-item class="show active" >

            <x-navtab-link class="rounded-0 active">
                <span class="d-none d-md-block">기본정보</span>
            </x-navtab-link>

            <x-form-hor>
                <x-form-label>카테고리 선택</x-form-label>
                <x-form-item>
                    @php
                    $categories = \Jiny\Shop\Entities\ShopCategory::all();
                    @endphp
                    <select class="sel_categories form-control" name="categories[]" multiple="multiple">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </x-form-item>
            </x-form-hor>

            <x-form-hor>
                <x-form-label>No of Products</x-form-label>
                <x-form-item>
                    {!! xInputText()
                        ->setWire('model.defer',"forms.numofProduct")
                        ->setWidth("standard")
                    !!}
                </x-form-item>
            </x-form-hor>




        </x-navtab-item>

    </x-navtab>

    @push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
        });
    </script>
    @endpush
</div>
