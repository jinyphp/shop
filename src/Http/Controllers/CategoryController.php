<?php
/**
 * jinyshop 카테고리 목록
 */
namespace Jiny\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // $categories = ShopCategory::all();
        $cate_id = 1;
        $categories = DB::table('category_items')->where('cate_id', $cate_id)->get();

        return view('jiny-shop::shop.category.index',['categories' => $categories]);
    }

}
