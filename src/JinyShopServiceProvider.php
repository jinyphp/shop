<?php

namespace Jiny\Shop;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;

class JinyShopServiceProvider extends ServiceProvider
{
    private $package = "jiny-shop";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);

        // 데이터베이스
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        // 컴포넌트
        Blade::component(\Jiny\Shop\View\Components\ShopProductImage::class, "shop-product-image"); // 제품의 이미지를 추가 등록합니다.
        Blade::component(\Jiny\Shop\View\Components\Banner::class, "jiny-banner");
        Blade::component(\Jiny\Shop\View\Components\FilterBrand::class, "shop-filter-brand");
        Blade::component(\Jiny\Shop\View\Components\FilterPrice::class, "shop-filter-price");
        Blade::component(\Jiny\Shop\View\Components\FilterColor::class, "shop-filter-color");
        Blade::component(\Jiny\Shop\View\Components\FilterSize::class, "shop-filter-size");


    }

    public function register()
    {
        /* 라이브와이어 컴포넌트 등록 */
        $this->app->afterResolving(BladeCompiler::class, function () {

                //event_price
                Livewire::component('ShopEvent', \Jiny\Shop\Http\Livewire\ShopEvent::class);

                //banner
                Livewire::component('ShopBanner', \Jiny\Shop\Http\Livewire\ShopBanner::class);

                //contacts
                Livewire::component('ShopContact', \Jiny\Shop\Http\Livewire\ShopContact::class);

                //currency
                Livewire::component('ShopCurrency', \Jiny\Shop\Http\Livewire\ShopCurrency::class);

                //review
                Livewire::component('ShopReview', \Jiny\Shop\Http\Livewire\ShopReview::class);

                //seller
                Livewire::component('ShopSeller', \Jiny\Shop\Http\Livewire\ShopSeller::class);

                //shipping
                Livewire::component('ShopShipping', \Jiny\Shop\Http\Livewire\ShopShipping::class);


                Livewire::component('LiveProducts', \Jiny\Shop\Http\Livewire\LiveProducts::class);

                //Livewire::component('LiveCheckout', \Jiny\Shop\Http\Livewire\LiveCheckout::class);
                Livewire::component('WidgetShopCheckoutProducts', \Jiny\Shop\Http\Livewire\WidgetShopCheckoutProducts::class);
                Livewire::component('WidgetShopCheckoutShipping', \Jiny\Shop\Http\Livewire\WidgetShopCheckoutShipping::class);
                Livewire::component('WidgetShopCheckoutCash', \Jiny\Shop\Http\Livewire\WidgetShopCheckoutCash::class);
                Livewire::component('WidgetShopCheckoutPay', \Jiny\Shop\Http\Livewire\WidgetShopCheckoutPay::class);
                Livewire::component('WidgetShopCheckoutCoupon', \Jiny\Shop\Http\Livewire\WidgetShopCheckoutCoupon::class);



                // 장바구니
                Livewire::component('ShopCart', \Jiny\Shop\Http\Livewire\ShopCart::class);

                // 상세정보
                Livewire::component('LiveDetail', \Jiny\Shop\Http\Livewire\LiveDetail::class);




                Livewire::component('ShopPopularProducts', \Jiny\Shop\Http\Livewire\ShopPopularProducts::class);
                Livewire::component('ShopProductReviews', \Jiny\Shop\Http\Livewire\ShopProductReviews::class);
                Livewire::component('ShopMostViewProducts', \Jiny\Shop\Http\Livewire\ShopMostViewProducts::class);

                Livewire::component('WidgetShopDetailOption', \Jiny\Shop\Http\Livewire\WidgetShopDetailOption::class);


                // 카테고리


                Livewire::component('LiveSearch', \Jiny\Shop\Http\Livewire\LiveSearch::class);
                Livewire::component('LiveSearchProduct', \Jiny\Shop\Http\Livewire\LiveSearchProduct::class);

                // 슬라이드 출력
                Livewire::component('LiveSliders', \Jiny\Shop\Http\Livewire\LiveSliders::class);
                Livewire::component('ShopMain-Selider', \Jiny\Shop\Http\Livewire\LiveSliders2::class);

                Livewire::component('LiveMainCate', \Jiny\Shop\Http\Livewire\LiveMainCate::class);
                Livewire::component('LiveOnSale', \Jiny\Shop\Http\Livewire\LiveOnSale::class);
                Livewire::component('LiveLastProduct', \Jiny\Shop\Http\Livewire\LiveLastProduct::class);



                Livewire::component('LiveWishListCount', \Jiny\Shop\Http\Livewire\LiveWishListCount::class);
                Livewire::component('LiveCartListCount', \Jiny\Shop\Http\Livewire\LiveCartListCount::class);

                // 관심상품
                Livewire::component('ShopWishList', \Jiny\Shop\Http\Livewire\ShopWishList::class);


                Livewire::component('LiveContact', \Jiny\Shop\Http\Livewire\LiveContact::class);

                // 사용자정보
                Livewire::component('LivePasswordChange', \Jiny\Shop\Http\Livewire\LivePasswordChange::class);
                Livewire::component('UserProfile', \Jiny\Shop\Http\Livewire\UserProfile::class);




        });



    }
}
