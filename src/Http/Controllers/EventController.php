<?php
/**
 * jinyshop 관심상품
 */
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Jiny\Coupon\Http\Controllers\Coupon;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        //dd( Coupon::apply(5, 1000) );
        //$price = Coupon::apply(사용자쿠폰ID, 가격);

        $name = $request->name;
        if($name) {
            return view('shop.event.'.$name);
        }

        return view('shop.event.index');
    }


}
