<?php

namespace Jiny\Shop\Http\Controllers\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $orders = DB::table('shop_orders')->orderby('created_at',"DESC")->where('user_id',Auth::user()->id)->get()->take(10);
        $totalCost = DB::table('shop_orders')->where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = DB::table('shop_orders')->where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDelivery = DB::table('shop_orders')->where('status','=','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = DB::table('shop_orders')->where('status','=','canceled')->where('user_id',Auth::user()->id)->count();

        return view('jiny-shop::user.dashboard.index',[
            'orders'=>$orders,
            'totalCost'=>$totalCost,
            'totalPurchase'=>$totalPurchase,
            'totalDelivery'=>$totalDelivery,
            'totalCanceled'=>$totalCanceled
        ]);
    }


}
