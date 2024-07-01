<?php

namespace Jiny\Shop\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\WireTable\Http\Controllers\WireDashController;
class AdminDashboardController extends WireDashController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        $this->actions['view']['main'] = "jiny-shop::admin.dashboard.dash";

        $this->actions['title'] = "Shop Dashboard";
        $this->actions['subtitle'] = "쇼핑몰을 관리합니다.";

        //setMenu('menus/shop.json');
        setTheme("admin/sidebar");
    }



}
