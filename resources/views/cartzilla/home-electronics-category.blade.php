<div class="col-lg-3">
    <div class="navbar-nav">
        <div class="dropdown w-100">
            <!-- Button visible on large screens -->
            <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-theme="dark">
                <a class="position-absolute top-0 start-0 w-100 h-100" href="#">
                    <span class="visually-hidden">Categories</span>
                </a>
                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                    <i class="ci-grid fs-lg"></i>
                    <span class="ms-2 me-auto">Categories</span>
                </button>
            </div>

            <!-- Button visible on small screens -->
            <div class="d-lg-none">
                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start mb-2" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <i class="ci-grid fs-lg"></i>
                    <span class="ms-2 me-auto">Categories</span>
                </button>
            </div>

            <!-- Mega menu -->
            <ul class="dropdown-menu w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1">
                @if(is_array($rows) || is_object($rows))
                    @foreach ($rows as $category)
                        @if ($category['level'] == 1)
                            <li class="dropend position-static">
                                <div class="position-relative rounded pt-2 pb-1 px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex">
                                        <i class="ci-category-icon fs-xl opacity-60 pe-1 me-2"></i>
                                        <span class="text-truncate">{{ $category['sel_categories'] }}</span>
                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                    </a>
                                    <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                                        <i class="ci-category-icon fs-xl opacity-60 pe-1 me-2"></i>
                                        {{ $category['sel_categories'] }}
                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); animation: none;">
                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                        <div style="min-width: 194px">
                                            <div class="d-flex w-100">
                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate">
                                                    {{ $category['sel_categories'] }}
                                                </a>
                                            </div>
                                            <ul class="nav flex-column gap-2 mt-n2">
                                                @foreach ($rows as $subCategory)
                                                    @if ($subCategory['level'] == 2 && $subCategory['ref'] == $category['id'])
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop/products/1">
                                                                {{ $subCategory['sel_categories'] }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                @else
                    <p>No categories available.</p>
                @endif
            </ul>
        </div>
    </div>
</div>






