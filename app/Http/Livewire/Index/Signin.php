<?php

namespace App\Http\Livewire\Index;
use Livewire\Component;

class Signin extends Component
{
    public $email,
    $password;


    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function render()
    {
        $this->checkVal();
        return view('livewire.index.signin');
    }

    public function signin(){
        
        $cred = $this->validate();
        $token = curlOut(''.domain('8080').'/api/login','POST',$cred);
        isset($token->token)
            ? redirecto('member.dashboard',$token->token)
            :dd('no');
    }

    public function checkVal(){

        if (!empty($this->email)) {
            $this->resetValidation('email');
        }

        if (!empty($this->password)) {
            $this->resetValidation('password');
        }

    }
}
