<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;
use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Illuminate\Support\Facades\Auth;

class WidgetShopDetailOption extends Component
{
    public $admin;
    public $product;

    public $optionRequire;

    public function render()
    {
        if($this->popupOptionSetting) {
            // 팝업창 활성화 상태만 DB 조회
            // 상품옵션
            $rows = DB::table('shop_products_option')->where('product_id',$this->product['id'])->get();

            $this->optionRequire = [];
            $this->poid = [];
            foreach($rows as $row) {
                $oid = $row->option_id;
                $this->optionRequire[$oid] = $row->require;

                $this->poid []= $row->option_id;
            }

            // 옵션목록
            $this->optionList = DB::table('shop_options')->get();


        } else {
            $this->optionList = [];
        }

        return view('jiny-shop::shop.detail.options');
    }


    /**
     * 옵션설정 관리
     */
    public $popupOptionSetting=false;
    public $poid=[];
    public $optionList=[];
    public $product_id;
    public function openOptionSetting($id)
    {
        /*
        $this->product_id = $id;

        // 상품옵션
        $rows = DB::table('shop_products_option')->where('product_id',$id)->get();
        foreach($rows as $row) {
            $this->poid []= $row->option_id;
        }


        // 옵션목록
        $this->optionList = DB::table('shop_options')->get();
        */


        //$this->poid = $rows;
        $this->popupOptionSetting=true;
    }

    public function closeOptionSetting()
    {
        $this->popupOptionSetting = false;
    }

    public function addOption($option_id)
    {
        $row = DB::table('shop_products_option')
            ->where('product_id',$this->product['id'])
            ->where('option_id',$option_id)
            ->first();

        if($row) {
            // 중복 저장
        } else {
            DB::table('shop_products_option')->insert([
                'product_id'=>$this->product['id'],
                'option_id'=>$option_id
            ]);
        }
    }

    public function removeOption($option_id)
    {
        $row = DB::table('shop_products_option')
            ->where('product_id',$this->product['id'])
            ->where('option_id',$option_id)
            ->first();

        if($row) {
            //dd($row);
            DB::table('shop_products_option')
            ->where('id',$row->id)
            ->delete();


        }
    }

    public function enableRequire($id)
    {
        DB::table('shop_products_option')
            ->where('product_id',$this->product['id'])
            ->where('option_id',$id)
            ->update(['require'=>1]);
    }

    public function disableRequire($id)
    {
        DB::table('shop_products_option')
            ->where('product_id',$this->product['id'])
            ->where('option_id',$id)
            ->update(['require'=>0]);
    }
}
