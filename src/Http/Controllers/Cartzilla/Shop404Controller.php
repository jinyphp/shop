<?php
namespace Jiny\Shop\Http\Controllers\Cartzilla;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Cart;
use Illuminate\Support\Facades\Auth;

class Shop404Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view("www::shop-furniture.404-furniture");
    }

}
