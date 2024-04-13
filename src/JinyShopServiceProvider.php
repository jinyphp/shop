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

        // Custom Site Resources
        $path = resource_path('shop');
        if(!is_dir($path)) {
            mkdir($path,0777,true);
        }
        $this->loadViewsFrom($path, 'shop');

    }

    public function register()
    {

    }
}
