<?php
namespace Jiny\Shop\View\Components;

use Illuminate\View\Component;

/**
 * dropzone을 통한 쇼핑몰 상품 등록
 */
class ShopDropzone extends Component
{
    public $path;
    public $category;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($path=null, $category=null)
    {
        $this->path = $path; // 상품 등록 경로
        $this->category = $category; // 상품 카테고리
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-jiny-shop::components.'.'shop_dropzone');
    }
}
