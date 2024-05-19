<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LiveContact extends Component
{
    public $forms;

    public function render()
    {
        return view('jiny-shop::livewire.contact');
    }

    public function store()
    {
        DB::table('shop_contacts')->insertGetId([
            'name'=>$this->forms['name'],
            'email'=>$this->forms['email'],
            'phone'=>$this->forms['phone'],
            'comment'=>$this->forms['comment']
        ]);

        session()->flash('message',"문의가 정상적으로 접수 되었습니다.");
    }
}
