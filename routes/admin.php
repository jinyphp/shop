<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * Admin Site Router
 */
## 어드민 패키지가 설치가 되어 있는 경우만,
## 관리자 admin 경로를 추가합니다.
if(function_exists('admin_prefix')) {
    $prefix = admin_prefix();

    Route::middleware(['web'])
    ->name('admin.shop')
    ->prefix($prefix.'/shop')->group(function () {

        ## 설정
        Route::get('setting', [
            \Jiny\Shop\Http\Controllers\Admin\AdminSettingController::class,"index"]);


        // 쇼핑몰 관리자 데쉬보드
        Route::get('/', [
            \Jiny\Shop\Http\Controllers\Admin\AdminShopDashboard::class,
            "index"]);



    });
}

##
Route::middleware(['web'])->group(function(){
    ## 베너목록
    Route::get('/admin/shop/banners', [
        \Jiny\Shop\Http\Controllers\Admin\AdminBannersController::class,
        "index"]);

    Route::get('/admin/shop/sliders', [
        \Jiny\Shop\Http\Controllers\Admin\AdminSlidersController::class,
        "index"]);

    Route::get('/admin/shop/contact', [
        \Jiny\Shop\Http\Controllers\Admin\AdminContactController::class,
        "index"]);

    ## 환율적용 이력
    Route::get('/admin/shop/currency', [
        \Jiny\Shop\Http\Controllers\Admin\AdminCurrencyController::class,
        "index"]);

    // Route::get('/admin/shop/review', [
    //     \Jiny\Shop\Http\Controllers\Admin\AdminReviewController::class,
    //     "index"]);


    ## 판매자 목록
    Route::get('/admin/shop/seller', [
        \Jiny\Shop\Http\Controllers\Admin\AdminSellerController::class,
        "index"]);

    Route::get('/admin/shop/event_price', [
        \Jiny\Shop\Http\Controllers\Admin\AdminEventPriceController::class,
        "index"]);

    ## 쇼핑몰 관리자 직원
    Route::get('/admin/shop/manager', [
        \Jiny\Shop\Http\Controllers\Admin\AdminManagerController::class,
        "index"]);

    ## 쇼핑몰 관리자 역할
    Route::get('/admin/shop/manager/roles', [
        \Jiny\Shop\Http\Controllers\Admin\AdminRoleController::class,
        "index"]);
});


