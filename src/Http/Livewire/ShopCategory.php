<?php
namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;
// use \Jiny\Html\CTag;
// use Jiny\Shop\Entities\ShopSliders;

//use Livewire\WithFileUploads;

class ShopCategory extends Component
{
    //use WithFileUploads;
    //use \Jiny\WireTable\Http\Trait\Upload;

    public function render()
    {
        $objs = DB::table('shop_categories')->get();
        $rows = []; // 빈 배열
        foreach($objs as $item) {

            $temp = [];
            foreach($item as $key => $value) {
                $temp[$key] = $value;
            }


            $rows []= $temp;
        }

        return view('jiny-shop::shop.main.category',[
            'rows' => $rows
        ]);
    }
}
