<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSellerController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_seller"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.seller.list";
        $this->actions['view']['form'] = "jiny-shop::admin.seller.form";

        $this->actions['title'] = "판매자";
        $this->actions['subtitle'] = "판매자 입점을 관리합니다.";
    }
}
