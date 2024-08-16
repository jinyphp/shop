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

class CartzillaLiveReviews extends Component
{
    //use WithFileUploads;
    //use \Jiny\WireTable\Http\Trait\Upload;

    public function render()
    {
        $reviews = DB::table('reviews')->get(); // 리뷰 데이터를 먼저 가져옵니다.

        $rows = []; // 빈 배열
        foreach ($reviews as $review) {
            // 리뷰에 관련된 상품의 이미지를 가져오기 위해 쿼리 실행
            $product = DB::table('shop_products') //goods인지 products인지..
                ->where('id', $review->order_item_id)
                ->first();

            // 이미지가 있는 경우 $review에 추가
            $review->product_image = $product ? $product->image : null;

            // 배열에 추가
            $rows[] = (array) $review; // $review를 배열로 변환 후 추가
        }

        return view("jiny-shop::cartzilla.reviews_carousel", [
            'rows' => $rows
        ]);
    }

    // public function render()
    // {
    //     $objs = DB::table('reviews')->get();
    //     $rows = []; // 빈 배열
    //     foreach($objs as $item) { // 배열에서 각각의 객체를 하나씩 읽어 온다.

    //         $temp = []; // 객체를 변환할 빈 배열을 하나 초기화.
    //         foreach($item as $key => $value) {
    //             // 객체에서 키(프로퍼티)와 값을 분리해서 읽어 주세요.
    //             // 객체의 키와 값을 분리할 때는 `=>` 사용한다.
    //             $temp[$key] = $value;
    //         }

    //         // 변환된 하나의 개체의 배열을
    //         // 상위 rows 배열로 다시 넣어준다.
    //         $rows []= $temp;
    //     }
    //     // dd는 값을 디버그로 화면에 출력하고, 실행을 중단.
    //     // dump() 는 화면에 출력하고, 코드의 실행은 계속
    //     // dd($rows);

    //     return view("jiny-shop::cartzilla.reviews_carousel",[
    //         'rows' => $rows
    //     ]);
    // }
}
