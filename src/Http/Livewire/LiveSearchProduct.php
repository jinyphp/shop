<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

use Livewire\WithPagination;
use Jiny\Shop\Entities\ShopProducts;
use Jiny\Shop\Entities\ShopCategory;
use Cart;

class LiveSearchProduct extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;

    public $search;
    public $product_cate;
    public $product_cate_id;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->fill(request()->only('search','product_cate','product_cate_id'));
    }

    public function render()
    {
        if($this->sorting == "date") {
            $products = ShopProducts::where('name','like','%'.$this->search.'%')->
                where('category_id','like','%'.$this->product_cate_id.'%')->
                orderBy('created_at',"DESC")->
                paginate($this->pagesize);
        } else
        if($this->sorting == "price") {
            $products = ShopProducts::where('name','like','%'.$this->search.'%')->
            where('category_id','like','%'.$this->product_cate_id.'%')->orderBy('regular_price',"ASC")->paginate($this->pagesize);
        } else
        if($this->sorting == "price-desc") {
            $products = ShopProducts::where('name','like','%'.$this->search.'%')->
            where('category_id','like','%'.$this->product_cate_id.'%')->orderBy('regular_price',"DESC")->paginate($this->pagesize);
        } else {
            $products = ShopProducts::where('name','like','%'.$this->search.'%')->
            where('category_id','like','%'.$this->product_cate_id.'%')->paginate($this->pagesize);
        }


        $categories = ShopCategory::all();

        return view('jiny-shop::livewire.searchproduct',[
            'products'=>$products,
            'categories' => $categories
        ]);
    }

    public function store($product_id, $product_name, $product_price)
    {

        Cart::add($product_id, $product_name, 1, $product_price)->associate('Jiny\Shop\Entities\ShopProducts');
        session()->flash('success_message', "item added in cart");
        return redirect()->route('shop.cart');
    }




}
