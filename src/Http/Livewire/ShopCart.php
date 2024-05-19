<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShopCart extends Component
{
    public $cartidx; // 카트 주문정보

    public function render()
    {
        if($this->cartidx) {
            // 카트 번호를 이용하여 정보를 확인
            $rows = DB::table('shop_cart')->where('cartidx', $this->cartidx)->get();
            return view('jiny-shop::shop.cart.list',[
                'cart' => $rows
            ]);
        }

        return view('jiny-shop::shop.cart.error',['message'=>"카트 주문번호가 없습니다."]);
    }

    // 수량증가
    public function increaseQuantity($id)
    {
        DB::table('shop_cart')->where('id',$id)->increment('quantity');
    }

    // 수량감소
    public function decreaseQuantity($id)
    {
        $row = DB::table('shop_cart')->where('id',$id)->first();
        if($row->quantity > 1) {
            DB::table('shop_cart')->where('id',$id)->decrement('quantity');
        }
    }

    // 카트 삭제
    public function destroy($id)
    {
        DB::table('shop_cart')->where('id',$id)->delete();
        session()->flash('success_message',"item has been removed");

        // 컴포넌트 갱신
        $this->emit('refreshComponent');
    }

    // 카트 전체 삭제
    public function destroyAll()
    {
        //$email = Auth::user()->email;
        // 세션 삭제
        session()->forget('cart');

        // DB 삭제
        DB::table('shop_cart')->where('cartidx', $this->cartidx)->delete();
        session()->flash('success_message',"item has been all removed");

        // 컴포넌트 갱신
        $this->emit('refreshComponent');

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






    // later 이동
    /*
    public function switchToSaveForLater($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('Jiny\Shop\Entities\ShopProducts');

        $this->emitTo('LiveCartListCount', 'refreshComponent');
        session()->flash('success_message',"item has been saved for later");
    }

    public function moveToCart($rowId)
    {
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name, 1, $item->price)->associate('Jiny\Shop\Entities\ShopProducts');

        $this->emitTo('LiveCartListCount', 'refreshComponent');
        session()->flash('success_message',"item has been moved cart");
    }

    public function deleteFromSaveForLater($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        session()->flash('success_message',"item has been removed form save for later");
    }

    public $haveCouponCode;
    public $couponCode;
    public function applyCouponCode()
    {
        $coupon = DB::table('shop_coupons')
            ->where('code',$this->couponCode)
            ->where('expiry_date','>=',Carbon::today())
            ->where('cart_value','<=',Cart::instance('cart')->subtotal())->first();

        if(!$coupon) {
            session()->flash('coupon_message',"Coupon code is invalid");
            return;
        }

        // 쿠폰정보를 세션에 저장
        session()->put('coupon',[
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }


    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;

    public function calculateDiscount()
    {
        if(session()->has('coupon')) {
            if(session()->has('coupon')['type'] == "fixed") {
                $this->discount = session()->has('coupon')['value'];
            } else if(session()->has('coupon')['type'] == "fixed") {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->has('coupon')['value'])/100;
            }

            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = $this->subtotalAfterDiscount * 0.1;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }


    public function checkout()
    {
        if(Auth::check()) {
            return redirect()->route('shop.checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }

        if(session()->has('coupon')) {
            session()->put('checkout',[
                'discount'=>$this->discount,
                'subtotal'=>$this->subtotalAfterDiscount,
                'tax'=>$this->taxAfterDiscount,
                'total'=>$this->totalAfterDiscount
            ]);
        } else {
            session()->put('checkout',[
                'discount'=>0,
                'subtotal'=>Cart::instance('cart')->subtotal(),
                'tax'=>Cart::instance('cart')->tax(),
                'total'=>Cart::instance('cart')->total()
            ]);
        }
    }
    */

}
