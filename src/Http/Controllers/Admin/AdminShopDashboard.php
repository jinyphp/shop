<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * 쇼핑몰 관리자 데시보드
 */
use Jiny\WireTable\Http\Controllers\WireDashController;
class AdminShopDashboard extends WireDashController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        // 데시보드 리소스 페이지를 주입합니다.
        $this->actions['view']['main'] = "jiny-shop::admin.dashboard.main";

        $this->actions['title'] = "Shop Dashboard";
        $this->actions['subtitle'] = "쇼핑몰을 관리합니다.";

        //setMenu('menus/shop.json');
        setTheme("admin/sidebar");
    }

}
