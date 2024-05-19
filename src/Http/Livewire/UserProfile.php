<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use Jiny\Auth\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public $forms;

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('jiny-shop::user.profile.edit',[
            'user'=>$user
        ]);
    }


}
