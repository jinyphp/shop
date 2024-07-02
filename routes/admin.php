<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * Admin Site Router
 */
if(function_exists('admin_prefix')) {
    $prefix = admin_prefix();

    Route::middleware(['web','auth', 'admin'])
    ->name('admin.shop')
    ->prefix($prefix.'/shop')->group(function () {

        ## 설정
        Route::get('setting', [
            \Jiny\Shop\Http\Controllers\Admin\AdminSettingController::class,"index"]);


        // 사이트 데쉬보드
        Route::get('/', [
            \Jiny\Shop\Http\Controllers\Admin\AdminShopDashboard::class,
            "index"]);



    });
}

##
Route::middleware(['web'])->group(function(){
    Route::get('/admin/shop/banners', [
        \Jiny\Shop\Http\Controllers\Admin\AdminBannersController::class,
        "index"]);

    Route::get('/admin/shop/sliders', [
        \Jiny\Shop\Http\Controllers\Admin\AdminSlidersController::class,
        "index"]);

    Route::get('/admin/shop/contact', [
        \Jiny\Shop\Http\Controllers\Admin\AdminContactController::class,
        "index"]);

    Route::get('/admin/shop/currency', [
        \Jiny\Shop\Http\Controllers\Admin\AdminCurrencyController::class,
        "index"]);

    Route::get('/admin/shop/review', [
        \Jiny\Shop\Http\Controllers\Admin\AdminReviewController::class,
        "index"]);

    Route::get('/admin/shop/shipping', [
        \Jiny\Shop\Http\Controllers\Admin\AdminShippingMethodController::class,
        "index"]);

    Route::get('/admin/shop/seller', [
        \Jiny\Shop\Http\Controllers\Admin\AdminSellerController::class,
        "index"]);

    Route::get('/admin/shop/event_price', [
        \Jiny\Shop\Http\Controllers\Admin\AdminEventPriceController::class,
        "index"]);

    Route::get('/admin/shop/roles', [
        \Jiny\Shop\Http\Controllers\Admin\AdminRoleController::class,
        "index"]);
});


