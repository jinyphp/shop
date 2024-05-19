<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$shop_prefix = "shop";

/*
Route::prefix($shop_prefix)->group(function() {
    // 상품목록
    Route::get('/list/{slug?}', [
        \Jiny\Shop\Http\Controllers\GoodsListController::class,
        "index"])
        ->name('shop.products');
});
*/


/*
|--------------------------------------------------------------------------
| 쇼핑몰 링크
|--------------------------------------------------------------------------
*/

Route::prefix('shop')->group(function() {
    // 메인페이지
    Route::get('/', [
        \Jiny\Shop\Http\Controllers\ShopMainController::class,
        "index"]);

    // 상품목록
    Route::get('/products/{slug?}', [
        \Jiny\Shop\Http\Controllers\ProductsController::class,
        "index"])
        ->name('shop.products');

    // 상품 상세
    Route::get('/detail/{slug}', [
        \Jiny\Shop\Http\Controllers\DetailController::class,
        "index"]);

    // 카테고리 목록
    Route::get('/category', [
        \Jiny\Shop\Http\Controllers\CategoryController::class,
        "index"])->name('shop.category');

    // 장바구니, 관심상품
    Route::get('/cart', [
        \Jiny\Shop\Http\Controllers\CartController::class,
        "index"])->name('shop.cart');

    Route::get('/wishlist', [
        \jiny\Shop\Http\Controllers\WishController::class,
        "index"]);

    // 이벤트
    Route::get('/event/{name?}', [
        \Jiny\Shop\Http\Controllers\EventController::class,
        "index"]);


    Route::get('/search', [
        \Jiny\Shop\Http\Controllers\SearchProductsController::class,
        "index"])->name('shop.search');


    Route::get('/checkout', [
        \Jiny\Shop\Http\Controllers\CheckoutController::class,
        "index"])->name('shop.checkout');

    Route::get('/thankyou', [
        \Jiny\Shop\Http\Controllers\ThankyouController::class,
        "index"])->name('shop.thankyou');


    Route::get('/reviews/{slug}', [
        \Jiny\Shop\Http\Controllers\ReviewsController::class,
        "index"]);

    Route::get('/contact', [
        \Jiny\Shop\Http\Controllers\ContactController::class,
        "index"]);



});


/**
 * 회원(로그인) 사용자 링크
 */
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/shop/user', [
        \Jiny\Shop\Http\Controllers\User\UserDashboardController::class,
        "index"]);

    Route::get('/shop/user/profile', [
        \Jiny\Shop\Http\Controllers\User\UserProfileController::class,
        "index"]);

    Route::get('/shop/user/password/change', [
        \Jiny\Shop\Http\Controllers\User\UserPasswordChangeController::class,
        "index"]);


});

/**
 * 관리자 링크
 */

//,'authadmin'
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/shop/admin', [
        \Jiny\Shop\Http\Controllers\Admin\AdminDashboardController::class,
        "index"]);

    //Route::resource('/shop/admin/category', \Jiny\Shop\Http\Controllers\Admin\AdminCategoryController::class);


    ## 제품관리
    Route::resource('/shop/admin/brands',
        \Jiny\Shop\Http\Controllers\Admin\AdminBrandsController::class);

    Route::get('/shop/admin/products', [
        \Jiny\Shop\Http\Controllers\Admin\AdminProductController::class,
        'index']);

    Route::resource('/shop/admin/reviews',
        \Jiny\Shop\Http\Controllers\Admin\AdminReviewController::class);

    Route::get('/shop/admin/options', [
        \Jiny\Shop\Http\Controllers\Admin\AdminOptions::class,'index']);

    Route::get('/shop/admin/options/item/{id}', [
        \Jiny\Shop\Http\Controllers\Admin\AdminOptionsItem::class,'index']);


    Route::resource('/shop/admin/event/price',
        \Jiny\Shop\Http\Controllers\Admin\AdminEventPriceController::class);



    ## 주문관리
    Route::get('/shop/admin/orders', [
        \Jiny\Shop\Http\Controllers\Admin\AdminOrdersController::class,"index"]);

    Route::resource('/shop/admin/order/status',
        \Jiny\Shop\Http\Controllers\Admin\AdminOrderStatusController::class);

    Route::resource('/shop/admin/shipping',
        \Jiny\Shop\Http\Controllers\Admin\AdminShippingController::class);

    Route::resource('/shop/admin/shippingmethod',
        \Jiny\Shop\Http\Controllers\Admin\AdminShippingMethodController::class);

    ### 주문관리-분쟁조정
    Route::get('/shop/admin/orders/dispute', [
        \Jiny\Shop\Http\Controllers\Admin\Orders\DisputeController::class,
        "index"]);

    Route::get('/shop/admin/orders/dispute/history', [
        \Jiny\Shop\Http\Controllers\Admin\Orders\DisputeHistoryController::class,
        "index"]);



    Route::resource('/shop/admin/sliders',
        \Jiny\Shop\Http\Controllers\Admin\AdminSlidersController::class);

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

    Route::resource('/shop/admin/bank',
        \Jiny\Shop\Http\Controllers\Admin\AdminBankController::class);


    Route::resource('/shop/admin/seller',
        \Jiny\Shop\Http\Controllers\Admin\AdminSellerController::class);

    Route::resource('/shop/admin/payment',
        \Jiny\Shop\Http\Controllers\Admin\AdminPaymentController::class);

    Route::resource('/shop/admin/user/grade',
        \Jiny\Shop\Http\Controllers\Admin\AdminUserGradeController::class);

    // 적립금
    Route::get('/shop/admin/user/money', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserMoneyController::class,
        "index"]);

    Route::get('/shop/admin/user/money/{userid}', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserMoneyHistoryController::class,
        "index"]);

    // 예치금
    Route::get('/shop/admin/user/cash', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserCashController::class,
        "index"]);

    Route::get('/shop/admin/user/cash/{userid}', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserCashHistoryController::class,
        "index"]);


    // 포인트
    Route::get('/shop/admin/user/point', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserPointController::class,
        "index"]);
    Route::get('/shop/admin/user/point/{userid}', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserPointHistoryController::class,
        "index"]);


    Route::get('/shop/admin/user/address', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserAddressController::class,
        "index"]);

    Route::get('/shop/admin/user/phone', [
        \Jiny\Shop\Http\Controllers\Admin\AdminUserPhoneController::class,
        "index"]);

});


Route::prefix('godo')->group(function() {
    Route::get('/conf/basic/info',function(){
        return view('jiny-shop::godo.conf.basic.info');
    });

    Route::resource('/conf/basic/malls',
        \Jiny\Shop\Http\Controllers\Admin\GodoBasicMallController::class);
});




/**
 * dropzone 파일 업로드 api
 * CSRF 토큰적용을 위해서 미들웨어 web 통과.
 */
use Jiny\Shop\Http\Controllers\Admin\ProductUploadController;
Route::middleware(['web'])
->group(function(){
    Route::post('/api/shop/product/drop',[
        ProductUploadController::class,
        "dropzone"]);
    Route::post('/api/shop/product/images',[ProductUploadController::class,"images"]);
});



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
