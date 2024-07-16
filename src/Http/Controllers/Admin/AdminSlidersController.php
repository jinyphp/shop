<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSlidersController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_sliders"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.sliders.list";
        $this->actions['view']['form'] = "jiny-shop::admin.sliders.form";

        $this->actions['title'] = "쇼핑몰 슬라이더";
        $this->actions['subtitle'] = "이미지를 슬라이더 형태로 관리합니다.";
    }



}
