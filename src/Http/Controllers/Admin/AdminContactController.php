<?php
namespace Jiny\Shop\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminContactController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "shop_contacts"; // 테이블 정보
        $this->actions['title'] = "관리자: 연락망 관리";
        $this->actions['subtitle'] = "연락망 관리 페이지입니다.";

        $this->actions['view']['list'] = "jiny-shop::admin.contact.list";
        $this->actions['view']['form'] = "jiny-shop::admin.contact.form";

        $this->actions['title'] = "contact";
        $this->actions['subtitle'] = "협력등 다양한 사람들과 소통합니다.";
    }



}
