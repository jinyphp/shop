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
//use Jiny\Shop\Entities\ShopCategory;

use Cart;
use Illuminate\Support\Facades\Auth;

class LiveProducts extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;
    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    public function render()
    {
        $products = $this->getProducts();

        // 카트 데이터베이스 초기화
        if(Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return view('jiny-shop::products.grid',[
            'products'=>$products
        ]);
    }

    private function getProducts()
    {
        if($this->sorting == "date") {
            $products = ShopProducts::orderBy('created_at',"DESC")->paginate($this->pagesize);
        } else
        if($this->sorting == "price") {
            $products = ShopProducts::orderBy('regular_price',"ASC")->paginate($this->pagesize);
        } else
        if($this->sorting == "price-desc") {
            $products = ShopProducts::orderBy('regular_price',"DESC")->paginate($this->pagesize);
        } else {
            $products = ShopProducts::paginate($this->pagesize);
        }

        return $products;
    }

    /**
     * 장바구니 넣기
     */
    public function addCart($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)
        ->associate('Jiny\Shop\Entities\ShopProducts');

        session()->flash('success_message', "item added in cart");
        return redirect()->route('shop.cart');
    }


    /**
     * WishList
     */
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)
        ->associate('Jiny\Shop\Entities\ShopProducts');

        $this->emitTo('LiveWishListCount','refreshComponent');
    }

    public function removeFromWishList($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) {
            if($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('LiveWishListCount', 'refreshComponent');
                return;
            }
        }
    }


}
