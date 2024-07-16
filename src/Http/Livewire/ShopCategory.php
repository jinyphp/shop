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

class ShopCategory extends Component
{
    //use WithFileUploads;
    //use \Jiny\WireTable\Http\Trait\Upload;

    public function render()
    {
        $objs = DB::table('shop_categories')->get();
        $rows = []; // 빈 배열
        foreach($objs as $item) { // 배열에서 각각의 객체를 하나씩 읽어 온다.

            $temp = []; // 객체를 변환할 빈 배열을 하나 초기화.
            foreach($item as $key => $value) {
                // 객체에서 키(프로퍼티)와 값을 분리해서 읽어 주세요.
                // 객체의 키와 값을 분리할 때는 `=>` 사용한다.
                $temp[$key] = $value;
            }

            // 변환된 하나의 개체의 배열을
            // 상위 rows 배열로 다시 넣어준다.
            $rows []= $temp;
        }
        // dd는 값을 디버그로 화면에 출력하고, 실행을 중단.
        // dump() 는 화면에 출력하고, 코드의 실행은 계속
        // dd($rows);

        return view('jiny-shop::shop.main.category',[
            'rows' => $rows
        ]);
    }
}
