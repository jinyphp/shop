<?php
namespace Jiny\Shop\View\Components;

use Illuminate\View\Component;

/**
 * dropzone을 통한 복수 상품 이미지 관리
 */
class ShopProductImage extends Component
{
    public $path;
    public $pid;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($path=null, $pid=null)
    {
        $this->path = $path; // 상품 등록 경로
        $this->pid = $pid; // 상품 카테고리
        //dd($this->id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-shop::components.'.'shop_product_image');
    }
}
