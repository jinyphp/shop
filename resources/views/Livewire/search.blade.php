
    <div class="wrap-search center-section">
        <div class="wrap-search-form">
            <form action="{{route('shop.search')}}" id="form-search-top" name="form-search-top">
                <input type="text" name="search" value="{{$search}}" placeholder="Search here...">
                <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                <div class="wrap-list-cate">
                    <input type="hidden" name="product_cate" value="{{$product_cate}}" id="product-cate">
                    <input type="hidden" name="product_cate_id" value="{{$product_cate_id}}" id="product-cate-id">
                    <a href="#" class="link-control">{{str_split($product_cate,12)[0]}}</a>
                    <ul class="list-cate">
                        <li class="level-0">All Category</li>
                        @foreach($categories as $category)
                        <li class="level-1" data-id="{{$category->id}}">{{$category->name}}</li>
                        @endforeach
                        {{--
                        <li class="level-1">-Electronics</li>
                        <li class="level-2">Batteries & Chargens</li>
                        <li class="level-2">Headphone & Headsets</li>
                        <li class="level-2">Mp3 Player & Acessories</li>
                        <li class="level-1">-Smartphone & Table</li>
                        <li class="level-2">Batteries & Chargens</li>
                        <li class="level-2">Mp3 Player & Headphones</li>
                        <li class="level-2">Table & Accessories</li>
                        <li class="level-1">-Electronics</li>
                        <li class="level-2">Batteries & Chargens</li>
                        <li class="level-2">Headphone & Headsets</li>
                        <li class="level-2">Mp3 Player & Acessories</li>
                        <li class="level-1">-Smartphone & Table</li>
                        <li class="level-2">Batteries & Chargens</li>
                        <li class="level-2">Mp3 Player & Headphones</li>
                        <li class="level-2">Table & Accessories</li>
                        --}}
                    </ul>
                </div>
            </form>
        </div>
    </div>

