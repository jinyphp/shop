<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

use Jiny\Shop\Entities\ShopSliders;

class LiveSliders extends Component
{
    public function render()
    {
        $sliders = ShopSliders::all();

        return view('jiny-shop::shop.main.sliders',['sliders'=>$sliders]);
    }
}
