<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;
use Jiny\Shop\Entities\ShopProducts;

class LiveOnSale extends Component
{
    public function render()
    {
        $sproducts = ShopProducts::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        return view('jiny-shop::shop.main.onsale',['sProducts'=>$sproducts]);
    }
}
