<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WidgetShopCheckoutShipping extends Component
{
    public $orderidx; // 주문정보

    public function render()
    {

        if(Auth::check()) {
            // 회원 로그인시, 마지막 배송지 주소 표시
            $email = Auth::user()->email;
            $rows = DB::table('shop_address')
                ->where('email', $email)
                ->orderBy('default',"DESC")
                ->get();

            if(count($rows)>0) {
                $address = $rows[0];
            } else {
                $address = null;
            }
        } else if($this->orderidx) {
            // 주문번호
            $rows = DB::table('shop_address')
            ->where('orderidx', $this->orderidx)
            ->orderBy('default',"DESC")
            ->get();

            if(count($rows)>0) {
                $address = $rows[0];
            } else {
                $address = null;
            }
        } else {
            $address = null;
        }



        return view('jiny-shop::shop.checkout.shipping',[
            'address'=>$address
        ]);
    }


    /**
     * 신규 주소 추가
     */
    public $popup=false;
    public $forms=[];

    public function openPopupAdd()
    {
        $this->popup=true;
        $this->addrList = [];
    }

    public function closePopup()
    {
        $this->popup=false;
        $this->addrList = [];
    }

    public function save()
    {
        // 새로운 주소를 저장합니다.
        $this->forms['orderidx'] = $this->orderidx;
        DB::table('shop_address')->insert(
            $this->forms
        );

        $this->popup=false;
        $this->forms=[];
        $this->addrList = [];
    }

    public function edit($id)
    {
        $this->popup=true;
        $this->forms=[];
        $this->addrList = [];

        $row = DB::table('shop_address')->where('id',$id)->first();
        foreach($row as $key => $value) {
            $this->forms[$key] = $value;
        }
    }

    public function update($id)
    {
        $id = $this->forms['id'];
        DB::table('shop_address')->where('id',$id)->update($this->forms);

        $this->popup=false;
        $this->forms=[];
        $this->addrList = [];
    }


    /**
     * 주소 변경 팝업창 관리
     */
    public $popupSelect = false;
    public $addrList = [];
    public function openSelect()
    {
        if(Auth::check()) {
            $email = Auth::user()->email;
            $this->addrList = DB::table('shop_address')->where('email', $email)->get();
        } else if($this->orderidx) {
            $this->addrList = DB::table('shop_address')->where('orderidx', $this->orderidx)->get();
        } else {
            $this->addrList = [];
        }

        $this->popupSelect = true;
    }

    public function closeSelect()
    {
        $this->addrList = [];
        $this->popupSelect = false;
    }

    public function selectAddr($id)
    {
        // default 선택 초기화
        if(Auth::check()) {
            $email = Auth::user()->email;
            DB::table('shop_address')->where('email', $email)
            ->update([
                'default'=>0
            ]);
        } else if($this->orderidx) {
            // 주문번호
            DB::table('shop_address')->where('orderidx', $this->orderidx)
            ->update([
                'default'=>0
            ]);
        }

        // 초기값 선택
        DB::table('shop_address')->where('id',$id)->update(['default'=>1]);

        $this->addrList = [];
        $this->popupSelect = false;
    }
}
