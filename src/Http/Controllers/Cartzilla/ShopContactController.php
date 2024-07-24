<?php
namespace Jiny\Shop\Http\Controllers\Cartzilla;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Cart;
use Illuminate\Support\Facades\Auth;

class ShopContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index1()
    {
        return view("www::shop-furniture.contact-v1-furniture");
    }

    public function index2()
    {
        return view("www::shop-furniture.contact-v2-furniture");
    }

    public function index3()
    {
        return view("www::shop-furniture.contact-v3-furniture");
    }

}
