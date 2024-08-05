<?php
namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;
// use \Jiny\Html\CTag;
// use Jiny\Shop\Entities\ShopSliders;

//use Livewire\WithFileUploads;

class CartzillaLivenewArrivals extends Component
{
    //use WithFileUploads;
    //use \Jiny\WireTable\Http\Trait\Upload;

    public function render()
    {
        // 상품 데이터 가져오기
        $products = DB::table('shop_products')->get();
        $rows = [];

        // 각 상품에 대한 리뷰 평균 점수 계산
        foreach ($products as $product) {
            $temp = [];
            foreach ($product as $key => $value) {
                $temp[$key] = $value;
            }

            // 평균 리뷰 점수 계산
            $averageRating = DB::table('reviews')
                ->where('order_item_id', $product->id)
                ->avg('rating');

            // 평균 리뷰 점수를 temp 배열에 추가
            $temp['average_rating'] = $averageRating ?? 0; // Null 일 경우 0으로 설정

            // rows 배열에 추가
            $rows[] = $temp;
        }

        return view("jiny-shop::cartzilla.home-electronics-newArrivals", [
            'rows' => $rows
        ]);
    }
}
