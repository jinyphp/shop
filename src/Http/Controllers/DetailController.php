<?php
/**
 * jinyshop 상품 상세페이지
 */
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public $admin;
    public function __construct()
    {
        $this->admin = true;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        // CartIdx
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


        $slug = $request->slug;
        if (is_numeric($slug)) {
            $product = DB::table('shop_products')->where('id',$slug)->first();
        } else {
            $product = DB::table('shop_products')->where('slug',$slug)->first();
        }

        // 배열 변환
        $good = [];
        foreach($product as $key => $value) {
            $good[$key] = $value;
        }

        /*
        dd($good);

        // 상품 상세 페이지
        $datePath = str_replace("-","/", explode(" ",$product->created_at)[0]);
        $path = resource_path('views/shop/details/'.$datePath);
        if(!is_dir($path.'/'.$product->id)) mkdir($path.'/'.$product->id, 0755, true);
        if(!file_exists($path.'/'.$product->id."/description.blade.php")) {
            $description = "상품 설명이 없습니다.";
            file_put_contents($path.'/'.$product->id."/description.blade.php", $description);
        } else {
            $description = file_get_contents($path.'/'.$product->id."/description.blade.php");
        }

        // 상품 infomation
        if(!file_exists($path.'/'.$product->id."/infomation.blade.php")) {
            $infomation = "infomation 정보가 없습니다.";
            file_put_contents($path.'/'.$product->id."/infomation.blade.php", $infomation);
        } else {
            $infomation = file_get_contents($path.'/'.$product->id."/infomation.blade.php");
        }
        */


        return view('jiny-shop::shop.detail.main', [
            'admin'=>$this->admin,
            'product'=>$good,
            'slug'=>$slug,
            'cartidx'=>$cart_idx
            /*
            ,
            'description'=>$description,
            'infomation'=>$infomation
            */
        ]);
    }
}
