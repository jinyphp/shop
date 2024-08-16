@php
function renderCategories($categories, $parentId = 0, $level = 1) {
    //dump("Rendering categories for parentId: $parentId, level: $level");

    $html = '<ul class="dropdown-menu w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1">';
    if (isset($categories[$parentId])) {
        foreach ($categories[$parentId] as $category) {
            //dump($category);
            $html .= '<li class="dropend position-static">';
            $html .= '<div class="position-relative rounded pt-2 pb-1 px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">';
            $html .= '<a class="dropdown-item fw-medium stretched-link d-none d-lg-flex">';
            $html .= '<i class="ci-category-icon fs-xl opacity-60 pe-1 me-2"></i>';
            $html .= '<span class="text-truncate">' . $category->sel_categories . '</span>';
            $html .= '<i class="ci-chevron-right fs-base ms-auto me-n1"></i>';
            $html .= '</a>';
            $html .= '<div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">';
            $html .= '<i class="ci-category-icon fs-xl opacity-60 pe-1 me-2"></i>';
            $html .= $category->sel_categories;
            $html .= '<i class="ci-chevron-down fs-base ms-auto me-n1"></i>';
            $html .= '</div>';

            // 하위 카테고리 재귀 처리
            if (isset($categories[$category->id]) && $categories[$category->id]->isNotEmpty()) {
                // dump("Recursing into category with id: $category->id, level: " . ($level + 1));
                $html .= '<div class="dropdown-menu rounded-4 p-4" style="top: 1rem; animation: none;">';
                $html .= renderCategories($categories, $category->id, $level + 1);
                $html .= '</div>';
            }

            $html .= '</div>';
            $html .= '</li>';
        }
    }

    $html .= '</ul>';
    return $html;
}
@endphp




<style>
    .dropdown-menu .text-truncate {
        color: #000; /* 텍스트 색상을 검은색으로 설정 */
    }
</style>

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
            {!! renderCategories($categories) !!}
        </div>
    </div>
</div>





