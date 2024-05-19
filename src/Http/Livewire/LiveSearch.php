<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

use Jiny\Shop\Entities\ShopCategory;

class LiveSearch extends Component
{
    public $search;
    public $product_cate;
    public $product_cate_id;

    public function mount()
    {
        $this->product_cate = 'All Category';
        $this->fill(request()->only('search','product_cate','product_cate_id'));

    }

    public function render()
    {
        $categories = ShopCategory::all();

        return view('jiny-shop::livewire.search',['categories'=>$categories]);
    }
}
