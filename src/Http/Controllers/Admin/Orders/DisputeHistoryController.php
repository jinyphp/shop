<?php

namespace Jiny\Shop\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class DisputeHistoryController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_dispute_history"; // 테이블 정보

        $this->actions['view_list'] = "jiny-shop::admin.orders.dispute_history.list";
        $this->actions['view_form'] = "jiny-shop::admin.orders.dispute_history.form";
    }



}
