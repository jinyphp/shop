<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

use Jiny\Shop\Entities\ShopSliders;

class ShopBrands extends Component
{
    public $direction;

    public function render()
    {
        $rows = DB::table('shop_brands')->get();

        if ($this->direction == "virtical") {
            $viewFile = 'jiny-shop::shop.brands.brand_virtical';
        } else {
            $viewFile = 'jiny-shop::shop.brands.brand_hor';
        }

        return view($viewFile,['brands'=>$rows]);
    }
}
