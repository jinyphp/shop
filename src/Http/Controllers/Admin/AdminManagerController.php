<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminManagerController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_manager"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.manager.list";
        $this->actions['view']['form'] = "jiny-shop::admin.manager.form";

        $this->actions['title'] = "쇼핑몰 관리자";
        $this->actions['subtitle'] = "쇼핑몰 업무를 위한 관리자목록";
    }
}
