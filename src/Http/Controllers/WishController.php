<?php
/**
 * jinyshop 관심상품
 */
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('jiny-shop::shop.wish.index');
    }


}
