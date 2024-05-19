<?php

namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {

        return view('jiny-shop::reviews', ['slug'=>$request->slug]);
    }


}
