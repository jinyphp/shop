<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WidgetShopCheckoutProducts extends Component
{
    public $orderidx; // 주문정보

    protected $listeners = ['refreshCheckoutProduct'];
    public function refreshCheckoutProduct()
    {
        // 쿠폰 변경시 호출되는 emit function
    }

    public function render()
    {
        if($this->orderidx) {
            // 주문 번호를 이용하여 정보를 확인
            $rows = DB::table('shop_checkout_items')
            //->where('cartidx', $this->orderidx)
            ->get();
            return view('jiny-shop::shop.checkout.product',[
                'products' => $rows
            ]);
        }

        return view('jiny-shop::shop.checkout.error',['message'=>"주문번호가 없습니다."]);
    }

    // 수량증가
    public function increaseQuantity($id)
    {
        DB::table('shop_checkout_items')->where('id',$id)->increment('quantity');
    }

    // 수량감소
    public function decreaseQuantity($id)
    {
        $row = DB::table('shop_checkout_items')->where('id',$id)->first();
        if($row->quantity > 1) {
            DB::table('shop_checkout_items')->where('id',$id)->decrement('quantity');
        }
    }

    // 카트 삭제
    public function destroy($id)
    {
        DB::table('shop_checkout_items')->where('id',$id)->delete();
        session()->flash('success_message',"item has been removed");

        // 컴포넌트 갱신
        //$this->emit('refreshComponent');
    }

    // 카트 전체 삭제
    public function destroyAll()
    {
        // 세션 삭제
        session()->forget('orderidx');

        // DB 삭제
        DB::table('shop_checkout_items')->where('orderidx', $this->orderidx)->delete();
        session()->flash('success_message',"item has been all removed");

        // 컴포넌트 갱신
        //$this->emit('refreshComponent');

        $this->popupConfirmDelete = false;
    }

    /**
     * 카트 삭제 확인창
     */
    public $popupConfirmDelete = false;

    public function confirmDeleteAll()
    {
        $this->popupConfirmDelete = true;
    }

    public function popupClose()
    {
        $this->popupConfirmDelete = false;
    }

}
