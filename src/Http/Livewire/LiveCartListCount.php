<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

class LiveCartListCount extends Component
{
    //public $cartidx;
    protected $listeners = ['refreshComponent'=>'$refresh'];

    public function render()
    {
        //session()->forget('cart');
        if(session()->has('cart')) {
            $cartCount = session('cart');
        } else
        if(session()->has('cartidx')) {
            // DB 장바구니 조회
            $cartidx = session('cartidx');
            $rows = DB::table('shop_cart')
                ->where('cartidx',$cartidx)->get();
            $cartCount = count($rows);

            // 쿠키생성
            session('cart', $cartCount);
        } else {
            $cartCount = 0;
        }

        //dd($cartCount);

        return view('jiny-shop::shop.cart.count',['cartCount'=>$cartCount]);
    }
}
