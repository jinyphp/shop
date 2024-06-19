<?php

namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminOptionsItem extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_options_item"; // 테이블 정보

        $this->actions['view_list'] = "jiny-shop::admin.option_item.list";
        $this->actions['view_form'] = "jiny-shop::admin.option_item.form";

    }

    public function index(Request $request)
    {
        return parent::index($request);
    }

    ## 목록 dbFetch 전에 실행됩니다.
    public function hookIndexing($wire)
    {
        // pos 정렬

        // 반환값이 있으면, 종료됩니다.
    }

    ## 생성폼이 실행될때 호출됩니다.
    public function hookCreating($wire, $value)
    {
        $form=[];
        //dd($wire->actions['request']);
        $form['option_id'] = $wire->actions['request']['nesteds']['id'];
        //dd($form);
        return $form; // 설정시 form 입력 초기값으로 설정됩니다.
    }



}
