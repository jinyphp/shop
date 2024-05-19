<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;
use Illuminate\Support\Facades\Auth;

use \Jiny\Html\CTag;

class LiveWishListCount extends Component
{


    public function render()
    {
        if(session()->has('wish')) {
            $wishCount = session('wish');
        } else
        if(Auth::check()) {
            $email = Auth::user()->email;
            $rows = DB::table('shop_wish')
                ->where('email',$email)->get();
            $wishCount = count($rows);

            // 쿠키생성
            session('wish', $wishCount);
        } else {
            $wishCount = 0;
        }

        return view('jiny-shop::shop.wish.count',['wishCount'=>$wishCount]);
    }

    protected $listeners = ['refreshComponent'];
    public function refreshComponent()
    {

    }

}
