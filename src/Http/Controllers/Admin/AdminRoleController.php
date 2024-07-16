<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminRoleController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_admin_roles"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.roles.list";
        $this->actions['view']['form'] = "jiny-shop::admin.roles.form";

        $this->actions['title'] = "쇼핑몰 관리자 역할";
        $this->actions['subtitle'] = "쇼핑몰 업무를 위한 역할을 관리합니다.";

    }
}
