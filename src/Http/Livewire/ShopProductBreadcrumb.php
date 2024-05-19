<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use Livewire\WithPagination;
use Jiny\Shop\Entities\ShopProducts;
//use Jiny\Shop\Entities\ShopCategory as Category;
use Cart;

class ShopProductBreadcrumb extends Component
{
    public $slug;
    public $category_id;
    public $category_name;

    public function render()
    {
        $slug = $this->slug;
        if(is_numeric($slug)) {
            $cate = DB::table('category_items')->where('id',$slug)->first();
        } else {
            $cate = DB::table('category_items')->where('slug',$slug)->first();
        }

        if($cate) {
            $this->category_name = $cate->title;
            $this->category_id = $cate->id;
        }

        return view('jiny-shop::shop.products.breadcrumb');
    }

    /**
     * Popup Admin
     */
    public $admin;
    public $popup = false;
    public $forms;

    public function edit($id)
    {
        $this->popup = true;
        $this->category_id = $id;

        //dd($id);
        $row = DB::table('category_items')->where('id',$id)->first();
        foreach($row as $key => $value) {
            $this->forms[$key]=$value;
        }
    }

    public function update()
    {
        DB::table('category_items')
        ->where('id',$this->category_id)
        ->update($this->forms);

        $this->popup = false;
    }

}
