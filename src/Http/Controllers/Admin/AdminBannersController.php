<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * 쇼핑몰 관리자: 베너관리
 * 베너를 등록하고 관리합니다.
 */
use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminBannersController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_banners"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.banners.list";
        $this->actions['view']['form'] = "jiny-shop::admin.banners.form";

        $this->actions['title'] = "쇼핑몰 베너관리";
        $this->actions['subtitle'] = "다양한 베너를 등록하고, 적용을 관리합니다.";
    }
}
