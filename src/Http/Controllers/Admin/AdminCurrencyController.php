<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * 쇼핑몰 관리자: 환율설정
 */

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminCurrencyController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_currency"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.currency.list";
        $this->actions['view']['form'] = "jiny-shop::admin.currency.form";

        $this->actions['title'] = "설정:환율";
        $this->actions['subtitle'] = "적용할 환율을 계산합니다.";

    }
}
