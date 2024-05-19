<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WidgetShopCheckoutCoupon extends Component
{
    public $orderidx; // 주문정보

    public $discount;


    public function render()
    {
        if(Auth::check()) {
            $user = Auth::user();
            $rows = DB::table('shop_coupons')->get();


            if(isset($this->forms['coupon'])) {
                $coupon_id = $this->forms['coupon'];
                foreach($rows as $row) {
                    if($row->id == $coupon_id) {
                        $this->discount = $row->value;
                    }
                }
            } else if(isset($this->cproduct['coupon'])) {
                $coupon_id = $this->cproduct['coupon'];
                foreach($rows as $row) {
                    if($row->id == $coupon_id) {
                        $this->discount = $row->value;
                    }
                }
            }




        } else {

        }



        return view('jiny-shop::shop.checkout.coupon',[
            'coupons' => $rows
        ]);
    }

    public $popup=false;
    public function openPopup()
    {
        $this->popup=true;
    }

    public function closePopup()
    {
        $this->popup=false;
    }


    protected $listeners = ['coupon'];
    public $product_id;
    public $cproduct = [];
    public $forms = [];
    public function coupon($id)
    {
        $this->product_id = $id;
        $this->popup=true;

        $rows = DB::table('shop_checkout_items')->where('id',$id)->first();
        foreach($rows as $key => $value) {
            $this->cproduct[$key] = $value;
        }
    }

    public function apply()
    {
        // 쿠폰정보
        $id = $this->forms['coupon'];
        $coupon = DB::table('shop_coupons')->where('id',$id)->first();

        DB::table('shop_checkout_items')->where('id',$this->cproduct['id'])
        ->update([
            'coupon' => $coupon->id,
            'coupon_value' => $coupon->value
        ]);

        $this->popup=false;

        $this->emit('refreshCheckoutProduct');

    }

}
