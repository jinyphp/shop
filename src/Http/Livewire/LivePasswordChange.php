<?php

namespace Jiny\Shop\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

use Jiny\Auth\Models\User;

class LivePasswordChange extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;

    public function render()
    {

        return view('jiny-shop::livewire.password.change');
    }

    public function updated($fields)
    {
        /*
        $this->validateOnly($fields, [
            'current_password'=>'required',
            'new_password'=>'required|min:8|confirmed'
        ]);
        */
    }

    public function changePassword()
    {

        $this->validate([
            'current_password'=>'required',
            'new_password' => ['required', 'min:8'], //, Rules\Password::defaults()
            'confirm_password' => ['required', 'min:8']
        ]);


        if($this->new_password == $this->confirm_password) {
            if(Hash::check($this->current_password, Auth::user()->password)) {

                $password = Hash::make($this->new_password);
                //dump($password);

                //$user = DB::table('users')->where('id', Auth::user()->id)->first();
                DB::table('users')->where('id', Auth::user()->id)->update([
                    'password'=>$password
                ]);



                session()->flash('password_success',$this->new_password."=".$password."비밀번호 변경이 되었습니다.");

            } else {

                session()->flash('password_error', $this->current_password."비밀번호가 일치하지 않습니다.");
            }
        } else {
            session()->flash('password_error', "Confirm 비빌번호가 일치하지 않습니다.");
        }
    }



}
