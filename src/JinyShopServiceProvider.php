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
        Blade::component(\Jiny\Shop\View\Components\ShopDropzone::class, "shop-dropzone"); // 새로운 상품을 등록합니다.
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
            Livewire::component('ShopProductList',
                \Jiny\Shop\Http\Livewire\ShopProductList::class);

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
                Livewire::component('ShopProductDetail', \Jiny\Shop\Http\Livewire\ShopProductDetail::class);
                Livewire::component('ShopProductImage', \Jiny\Shop\Http\Livewire\ShopProductImage::class);
                Livewire::component('ShopProductDescription', \Jiny\Shop\Http\Livewire\ShopProductDescription::class);
                Livewire::component('ShopProductInfomation', \Jiny\Shop\Http\Livewire\ShopProductInfomation::class);

                Livewire::component('ShopRelatedProducts', \Jiny\Shop\Http\Livewire\ShopRelatedProducts::class);
                Livewire::component('ShopPopularProducts', \Jiny\Shop\Http\Livewire\ShopPopularProducts::class);
                Livewire::component('ShopProductReviews', \Jiny\Shop\Http\Livewire\ShopProductReviews::class);
                Livewire::component('ShopMostViewProducts', \Jiny\Shop\Http\Livewire\ShopMostViewProducts::class);

                Livewire::component('WidgetShopDetailOption', \Jiny\Shop\Http\Livewire\WidgetShopDetailOption::class);


                // 카테고리

                Livewire::component('ShopProductBreadcrumb', \Jiny\Shop\Http\Livewire\ShopProductBreadcrumb::class);

                Livewire::component('LiveSearch', \Jiny\Shop\Http\Livewire\LiveSearch::class);
                Livewire::component('LiveSearchProduct', \Jiny\Shop\Http\Livewire\LiveSearchProduct::class);

                Livewire::component('LiveSliders', \Jiny\Shop\Http\Livewire\LiveSliders::class);
                Livewire::component('LiveMainCate', \Jiny\Shop\Http\Livewire\LiveMainCate::class);
                Livewire::component('LiveOnSale', \Jiny\Shop\Http\Livewire\LiveOnSale::class);
                Livewire::component('LiveLastProduct', \Jiny\Shop\Http\Livewire\LiveLastProduct::class);

                Livewire::component('ShopBrands', \Jiny\Shop\Http\Livewire\ShopBrands::class);

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
