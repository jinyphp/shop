<?php
/**
 * jinyShop 장바구니
 */
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        //$request->session()->forget('cartidx');
        if($cart_idx = $request->cookie('cartidx')) {
            // 쿠키가 있는 경우, 쿠키값으로 cartidx를 사용
            $cart_status = "cart쿠키";

            // 쿠키존재, 세션값이 없는 경우
            if ($request->session()->has('cartidx')) {
                $request->session()->put('cartidx', $cart_idx);
            }
        } else
        if ($request->session()->has('cartidx')) {
            // 서버 세션값 이용
            $cart_idx = $request->session()->get('cartidx');
            $cart_status = "cart세션";
        } else {
            // cartidx 생성
            $str = md5(microtime().mt_rand(1000,2000));
            $cart_idx = date("Ymd")."_".substr($str,0,21); //30자
            $cart_status = "cart생성";

            // 세션 생성
            $request->session()->put('cartidx', $cart_idx);

            // 쿠키 생성
            $min = 60*60*24*30;
            Cookie::queue(Cookie::make('cartidx',$cart_idx,$min));
        }


        return view('jiny-shop::shop.cart.index',[
            'cartidx' => $cart_idx, 'cart_status'=>$cart_status
        ]);
    }


}
