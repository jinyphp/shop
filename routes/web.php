<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$shop_prefix = "shop";

Route::middleware(['web'])
->name("shop")
->prefix("shop")->group(function () {

    // 홈화면:테스트
    // Route::get('/home', function () {
    //     return view("www::slot1.shop.home");
    // });

    /**
     * Cartzilla
     */

    //메인 화면
    Route::get('/furniture/home', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopHomeController::class,
        "index"]);
    //상품 상세
    Route::get('/furniture/product', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopProductController::class,
        "index"]);
    //카탈로그
    Route::get('/furniture/catalog', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopCatalogController::class,
        "index"]);
    //404
    Route::get('/furniture/404', [
        \Jiny\Shop\Http\Controllers\Cartzilla\Shop404Controller::class,
        "index"]);
    //contact-v1
    Route::get('/furniture/contact1', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopContactController::class,
        "index1"]);
    //contact-v2
    Route::get('/furniture/contact2', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopContactController::class,
        "index2"]);
    //contact-v3
    Route::get('/furniture/contact3', [
        \Jiny\Shop\Http\Controllers\Cartzilla\ShopContactController::class,
        "index3"]);

    /**
     * 카트질라 분리
     */
    Route::get('/electronics/sliders', [
        \Jiny\Shop\Http\Controllers\Cartzilla\MainController::class,
        "index"]);




    Route::get('/home', [
        \Jiny\Shop\Http\Controllers\ShopMainController::class,
        "index"]);



    // 메인페이지
    Route::get('/', [
        \Jiny\Shop\Http\Controllers\ShopMainController::class,
        "index"]);



    // 이벤트
    Route::get('/event/{name?}', [
        \Jiny\Shop\Http\Controllers\EventController::class,
        "index"]);

    Route::get('/contact', [
        \Jiny\Shop\Http\Controllers\ContactController::class,
        "index"]);

});


Route::middleware(['web'])
->name("admin")
->prefix("admin")->group(function () {
    Route::get('/shop/sliders',[
        \Jiny\Shop\Http\Controllers\Admin\AdminSlidersController::class,
        "index"
    ]);
});



/**
 * 관리자 링크
 */
Route::middleware(['auth:sanctum','verified'])->group(function(){

    /*
    Route::get('/shop/admin', [
        \Jiny\Shop\Http\Controllers\Admin\AdminDashboardController::class,
        "index"]);
        */

    //Route::resource('/shop/admin/category', \Jiny\Shop\Http\Controllers\Admin\AdminCategoryController::class);


    ## 제품관리
    Route::resource('/shop/admin/brands',
        \Jiny\Shop\Http\Controllers\Admin\AdminBrandsController::class);

    Route::resource('/shop/admin/event/price',
        \Jiny\Shop\Http\Controllers\Admin\AdminEventPriceController::class);



    Route::resource('/shop/admin/homecate',
        \Jiny\Shop\Http\Controllers\Admin\AdminHomeCateController::class);

    Route::resource('/shop/admin/timesale',
        \Jiny\Shop\Http\Controllers\Admin\AdminTimeSaleController::class);


    Route::resource('/shop/admin/contact',
        \Jiny\Shop\Http\Controllers\Admin\AdminContactController::class);

    Route::resource('/shop/admin/infomation',
        \Jiny\Shop\Http\Controllers\Admin\AdminInfomationController::class);

    Route::resource('/shop/admin/banners',
        \Jiny\Shop\Http\Controllers\Admin\AdminBannersController::class);

    Route::resource('/shop/admin/currency',
        \Jiny\Shop\Http\Controllers\Admin\AdminCurrencyController::class);

    Route::resource('/shop/admin/payment',
        \Jiny\Shop\Http\Controllers\Admin\AdminPaymentController::class);

});


Route::prefix('godo')->group(function() {
    Route::get('/conf/basic/info',function(){
        return view('jiny-shop::godo.conf.basic.info');
    });

    Route::resource('/conf/basic/malls',
        \Jiny\Shop\Http\Controllers\Admin\GodoBasicMallController::class);
});


include(__DIR__.DIRECTORY_SEPARATOR."admin.php");
