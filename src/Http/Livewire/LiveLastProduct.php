<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;
use Jiny\Shop\Entities\ShopProducts;

class LiveLastProduct extends Component
{
    public function render()
    {
        $lproducts = ShopProducts::orderBy('created_at',"DESC")->get()->take(8);
        return view('jiny-shop::shop.main.lastproduct',['lproducts'=>$lproducts]);
    }
}
