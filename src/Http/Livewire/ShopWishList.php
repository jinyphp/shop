<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;
use Jiny\Shop\Entities\ShopProducts;
use Cart;
use Illuminate\Support\Facades\Auth;

class ShopWishList extends Component
{
    public function render()
    {
        if(Auth::check()) {
            $email = Auth::user()->email;
            $rows = DB::table('shop_wish')->where('email', $email)->get();
        } else {
            $rows = [];
        }
        return view('jiny-shop::shop.wish.list',['wish'=>$rows]);
    }

    public function removeFromWishList($product_id)
    {
        // 관심상품 삭제
        DB::table('shop_wish')->where('id',$product_id)->delete();

        $wish = session('wish');
        if($wish > 0 ) {
            session()->decrement('wish');
        }

        // wish 컴포넌트 갱신
        $this->emit('refreshComponent');


        /*
        foreach(Cart::instance('wishlist')->content() as $witem) {
            if($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('LiveWishListCount', 'refreshComponent');
                return;
            }
        }
        */
    }

    public $cartidx;

    public function moveProductFromWishlistToCart($id)
    {
        if (session()->has('cartidx')) {
            $this->cartidx = session('cartidx');

            $wish = DB::table('shop_wish')->where('id',$id)->first();

            // cart목록에 상품이 존재하는지 확인
            $cart = DB::table('shop_cart')
                ->where('cartidx',$this->cartidx)
                ->where('product_id',$wish->product_id)->first();

            if($cart) {
                // 장바구니 존재 : 상품 갯수를 1개 증가
                DB::table('shop_cart')
                ->where('cartidx',$this->cartidx)
                ->where('product_id',$wish->product_id)->increment('quantity');

            } else {
                // 카트 갯수
                session()->increment('cart');

                // 신규상품 등록
                $product = DB::table('shop_products')->where('id',$wish->product_id)->first();
                $data = [
                    'cartidx'=>$this->cartidx,
                    'product_id'=>$product->id,
                    'product'=>$product->name,
                    'image'=>$product->image,
                    'price'=>$product->sale_price
                ];

                if(Auth::check()) {
                    $email = Auth::user()->email;
                    $data['email'] = $email;
                }

                DB::table('shop_cart')->insert($data);
            }
        }


        /*
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('Jiny\Shop\Entities\ShopProducts');
        $this->emitTo('LiveWishListCount', 'refreshComponent');
        $this->emitTo('LiveCartListCount', 'refreshComponent');
        */

        // 관심상품 삭제
        DB::table('shop_wish')->where('id',$id)->delete();

        $wish = session('wish');
        if($wish > 0 ) {
            session()->decrement('wish');
        }

        // wish 컴포넌트 갱신
        $this->emit('refreshComponent');


    }
}
