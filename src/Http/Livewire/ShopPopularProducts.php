<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;
use Jiny\Shop\Entities\ShopProducts;
use Cart;

class ShopPopularProducts extends Component
{
    public $category_id;
    public $viewfile;

    public function render()
    {
        if(!$this->viewfile) {
            $this->viewfile = 'jiny-shop::shop.detail.popular';
        }

        $popular_products = ShopProducts::inRandomOrder()->limit(4)->get();
        return view($this->viewfile, [
            'popular_products'=>$popular_products
        ]);
    }

}
