<?php

namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminRstatusController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "rstatus_to_order_items"; // 테이블 정보

        $this->actions['view']['list'] = "jiny-shop::admin.rstatus.list";
        $this->actions['view']['form'] = "jiny-shop::admin.rstatus.form";

    }
}
