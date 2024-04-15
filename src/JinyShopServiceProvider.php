<?php

namespace Jiny\Shop;

use Illuminate\Support\ServiceProvider;

class JinyShopServiceProvider extends ServiceProvider
{
    private $package = "jiny-shop";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);



    }

    public function register()
    {

    }
}
