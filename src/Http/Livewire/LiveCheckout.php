<?php

namespace Jiny\Shop\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Webuni\FrontMatter\FrontMatter;
use Jiny\Pages\Http\Parsedown;

use \Jiny\Html\CTag;

use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Jiny\Shop\Entities\ShopOrder;
use Jiny\Shop\Entities\ShopOrderItems;
use Jiny\Shop\Entities\ShopShipping;
use Jiny\Shop\Entities\ShopTransaction;
use Stripe;

class LiveCheckout extends Component
{
    public $ship_to_different;

    public $forms = [];
    public $shipping = [];

    public $paymentMode;
    public $thankyou;

    public function render()
    {
        //$this->verifyForCheckout();
        /*
        $rows = DB::table('shop_checkout_items')->get();
        for($i=0; $i<count($rows);$i++) {
            $rows[$i]->options = json_decode($rows[$i]->options);
        }
        */

        //dd($rows);

        return view('jiny-shop::shop.checkout.check',[

        ]);
    }


    public function placeOrder()
    {
        $this->validate([

        ]);

        if($this->paymentMode == "card") {
            $this->validateOnly([

            ]);
        }

        $order = new ShopOrder();
        $order->user_id = Auth::user()->id();
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];

        $order->firstname = $this->forms['firstname'];
        $order->lastname = $this->forms['lastname'];
        $order->email = $this->forms['email'];
        $order->modile = $this->forms['modile'];
        $order->line1 = $this->forms['line1'];
        $order->line2 = $this->forms['line2'];
        $order->city = $this->forms['city'];
        $order->province = $this->forms['province'];
        $order->country = $this->forms['country'];
        $order->status = "ordered";
        $order->is_shipping_different = $this->is_shipping_different ? 1:0;

        $order->save();


        foreach(Cart::instance('cart')->content() as $item) {
            $orderItem = new ShopOrderItems();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }


        if($this->ship_to_different) {
            $this->validate([

            ]);

            $shipping = new ShopShipping();
            $shipping->order_id = $order->id;
            $shipping->firstname = $this->forms['firstname'];
            $shipping->lastname = $this->forms['lastname'];
            $shipping->email = $this->forms['email'];
            $shipping->modile = $this->forms['modile'];
            $shipping->line1 = $this->forms['line1'];
            $shipping->line2 = $this->forms['line2'];
            $shipping->city = $this->forms['city'];
            $shipping->province = $this->forms['province'];
            $shipping->country = $this->forms['country'];

            $shipping->save();

        }


        //결제방법
        if($this->paymentMode == "cash") {
            $this->makeTransaction($order->id, "pending");
            $this->resetCart();
        } else
        if($this->paymentMode == "card") {
            $stripe = Stripe::make(env('STRIPE_KEY'));

            try {
                $token = $tripe->token()->create([
                    'card'=> [
                        'number' => $this->card_no,
                        'exp_month' => $this->exp_month,
                        'exp_year' => $this->exp_year,
                        'cvc' => $this->cvc
                    ]
                    ]);

                if(isset($toekn['id'])) {
                    session->flash('stripe_error',"The stripe token wa not generated correctly!");
                    $this->thankyou = 0;

                }

                $customer = $stripe->customer()->create([
                    'name'=>$this->firstname . ' ' . $this->lastname,
                    'email'=>$this->email,
                    'phone'=>$this->mobile,
                    'address' =>[
                        'line1'=>$this->line1,
                        'postal_code'=>$this->zipcode,
                        'city'=> $this->city,
                        'state'=>$this->province,
                        'country'=>$this->country
                    ],
                    'shipping'=> [
                        'name'=>$this->firstname . ' ' . $this->lastname,
                        'address' =>[
                            'line1'=>$this->line1,
                            'postal_code'=>$this->zipcode,
                            'city'=> $this->city,
                            'state'=>$this->province,
                            'country'=>$this->country
                        ]
                    ],
                    'soutce'=> $token['id']
                ]);

                $charge = $stripe->charges()->create([
                    'customer'=>$customer['id'],
                    'currency' => 'USD',
                    'amount'=>session()->get('checkout')['total'],
                    'description'=>'Payment for order no'.$order->id
                ]);

                if($charge['status'] == 'succeeded') {
                    $this->makeTransaction($order->id, "approved");
                    $this->resetCart();
                } else {
                    session()->flash('stripe_error','Error in Transaction!');
                    $this->thankyou = 0;
                }
            } catch(Exception $e) {
                session()->flash('stripe_error', $e->getMessage());
                $this->thankyou = 0;
            }
        }





    }

    public function resetCart()
    {
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function makeTransaction($order_id, $status)
    {
        $transaction = new ShopTransaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order_id;
            $transaction->mode = $this->paymentMode;
            $transaction->status = $status;
            $transaction->save();
    }


    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        } else if($this->thankyou) {
            return redirect()->route('shop.thankyou');
        } else if(!session()->get('checkout')) {
            return redirect()->route('shop.cart');
        }
    }

    public function update()
    {
        $this->validateOnly([

        ]);

        if($this->ship_to_different) {
            $this->validateOnly([

            ]);

        }

        if($this->paymentMode == "card") {
            $this->validateOnly([

            ]);
        }
    }




    // 결제모듈
    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;


}
