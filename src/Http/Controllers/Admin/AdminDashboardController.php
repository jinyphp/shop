<?php

namespace Jiny\Shop\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Jiny\Table\Http\Controllers\DashboardController;
class AdminDashboardController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## Action 정보

        $this->actions['view_filter'] = "jiny-shop::admin.dashboard.filter";
        $this->actions['view_list'] = "jiny-shop::admin.dashboard.list";
        $this->actions['view_form'] = "jiny-shop::admin.dashboard.form";
    }



}
