<?php
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Cart;
use Illuminate\Support\Facades\Auth;

class ShopMainController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $name = "나경주";
        $rows = "디비를 검색한 결과";


        return view("www::slot1.shop.home",[
            'name' => $name
        ]);
    }

}
