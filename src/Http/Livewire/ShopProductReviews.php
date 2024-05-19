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

class ShopProductReviews extends Component
{
    public $product_id;

    public function render()
    {
        if(Auth::check()) {
            $user = Auth::user();
        }

        $reviews = DB::table('shop_reviews')
            ->where('product_id',$this->product_id)
            ->orderBy('pos',"desc")
            ->get();

        $product = DB::table('shop_products')->where('id', $this->product_id)->first();


        //like 중복 검사
        $ids = [];
        foreach($reviews as $item) {
            $ids []= $item->id;

            // like 카운터 초기화
            $i = $item->id;
            $this->like_count[$i] = 0;
        }

        $likes = DB::table('shop_reviews_like')
            ->whereIn('review_id',$ids)
            //->select(DB::raw('sum(total) as total_sum, sum(finish) as finish_sum, code, count(id) as pages'))
            //->groupBy('review_id')
            ->get();
        foreach($likes as $item) {
            $i = $item->review_id;
            $this->like_count[$i]++;

            if(isset($user) && $item->email == $user->email) {
                $this->liked[$i] = true;
            }
        }

        if($reviews) {
            return view('jiny-shop::shop.detail.reviews',['product'=>$product, 'reviews'=>$reviews]);
        } else {
            return <<<'blade'
        <p>작성된 리뷰가 없습니다.</p>
    blade;
        }
    }

    public $popup = false;
    public function create($product_id)
    {
        $this->forms = [];
        $this->popup = true;
    }

    public function close()
    {
        $this->popup = false;
    }


    public $forms = [];

    public function save()
    {
        $product = DB::table('shop_products')->where('id', $this->product_id)->first();

        $form = $this->forms;
        $form['product_id'] = $this->product_id;
        $form['product'] = $product->name;

        // 로그인 사용자 정보
        if(Auth::check()) {
            $user = Auth::user();
            $form['user_id'] = $user->id;
            $form['email'] = $user->email;
            $form['username'] = $user->name;
        }

        // 날짜 정보
        $form['created_at'] = date("Y-m-d H:i:s");
        $form['updated_at'] = $form['created_at'];

        // rank Percent
        if(isset($form['rank'])) {
            $form['rank'] = $form['rank'] * 20;
        } else {
            $form['rank'] = 0;
        }


        DB::table('shop_reviews')->insert([
            $form
        ]);

        $this->forms = [];

        $this->popup = false;
    }

    public function edit($id)
    {
        $row = DB::table('shop_reviews')->where('id',$id)->first();
        foreach($row as $key => $value) {
            $this->forms[$key] = $value;
        }

        if($this->forms['rank']>0) {
            $this->forms['rank'] /= 20;
        }

        $this->popup = true;
    }

    public function update($id)
    {
        $id = $this->forms['id'];
        $form = $this->forms;

        // rank Percent
        if(isset($form['rank'])) {
            $form['rank'] = $form['rank'] * 20;
        } else {
            $form['rank'] = 0;
        }

        DB::table('shop_reviews')->where('id',$id)->update($form);

        $this->forms = [];

        $this->popup = false;
    }

    public function delete($id)
    {
        // 로그인 사용자 정보
        if(Auth::check()) {
            $user = Auth::user();

            // 참조 reply 검사
            $row = DB::table('shop_reviews')->where('ref',$id)->first();
            if($row) {
                // reply 글이 존재합니다.
                session()->flash('message',"reply 글이 존재합니다.");
            } else {
                // 리뷰 삭제
                DB::table('shop_reviews')->where('id',$id)->delete();

                unset($this->liked[$id]);

                // like 정보 삭제
                DB::table('shop_reviews_like')
                    ->where('review_id',$id)
                    ->delete();
            }

            $this->forms = [];
            $this->popup = false;
        }
    }

    public $reply_id;
    public function reply($id)
    {
        $this->reply_id = $id;
        //$review = DB::table('shop_reviews')->where('id',$id)->first();

        $this->forms = [];
        $this->popup = true;
    }

    public function reply_update()
    {
        $review = DB::table('shop_reviews')->where('id',$this->reply_id)->first();

        $form = $this->forms;
        $form['ref'] = $review->id;
        $form['level'] = $review->level + 1;
        $form['pos'] = $review->pos;

        $form['product_id'] = $review->product_id;
        $form['product'] = $review->product;


        // pos +1 올리기
        DB::table('shop_reviews')
        ->where('product_id',$review->product_id)
        ->where('pos','>=',$review->pos)
        ->increment('pos');

        // 로그인 사용자 정보
        if(Auth::check()) {
            $user = Auth::user();
            $form['user_id'] = $user->id;
            $form['email'] = $user->email;
            $form['username'] = $user->name;
        }

        // 날짜 정보
        $form['created_at'] = date("Y-m-d H:i:s");
        $form['updated_at'] = $form['created_at'];

        // rank Percent
        if(isset($form['rank'])) {
            $form['rank'] = $form['rank'] * 20;
        } else {
            $form['rank'] = 0;
        }


        DB::table('shop_reviews')->insert([
            $form
        ]);


        $this->forms = [];
        $this->popup = false;
    }




    public $like_count = [];
    public $liked = [];
    public function like($id)
    {
        // 로그인 사용자 정보
        if(Auth::check()) {
            $user = Auth::user();
            $form['email'] = $user->email;
            $form['username'] = $user->name;

            DB::table('shop_reviews')->where('id',$id)->increment('like');
            $this->liked[$id]=true;

            $created_at = date("Y-m-d H:i:s");
            DB::table('shop_reviews_like')->insert([
                'review_id'=>$id,
                'user_id'=>$user->id,
                'username'=>$user->name,
                'email'=>$user->email,
                'created_at'=>$created_at,
                'updated_at'=>$created_at
            ]);

        }

    }

    public function unlike($id)
    {
        // 로그인 사용자 정보
        if(Auth::check()) {
            $user = Auth::user();

            // 숫자 감소
            DB::table('shop_reviews')->where('id',$id)->decrement('like');
            $this->liked[$id]=false;

            // like 정보 삭제
            DB::table('shop_reviews_like')
                ->where('review_id',$id)
                ->where('email',$user->email)
                ->delete();
        }
    }

}
