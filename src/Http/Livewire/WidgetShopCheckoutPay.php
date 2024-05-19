<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WidgetShopCheckoutPay extends Component
{
    public $orderidx; // 주문정보
    public $myCash;
    public $useCash;

    public function render()
    {
        if(Auth::check()) {
            $user = Auth::user();
            $row = DB::table('user_cash')
                ->where('user_id', $user->id)->first();
            if($row) {
                $this->myCash = $row->balance;
            } else {
                $this->myCash = 0;
            }
        } else {
            $this->myCash = 0;
        }

        return view('jiny-shop::shop.checkout.pay',[

        ]);
    }




}
