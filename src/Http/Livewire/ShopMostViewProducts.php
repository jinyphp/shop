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

class ShopMostViewProducts extends Component
{
    public $category_id;

    public function render()
    {
        //$relation_products = ShopProducts::where('category_id',$this->category_id)->inRandomOrder()->limit(5)->get();

        return view('jiny-shop::shop.cart.mostview');
    }

}
