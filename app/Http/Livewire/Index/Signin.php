<?php

namespace App\Http\Livewire\Index;
use Livewire\Component;

class Signin extends Component
{
    public $email,$password,$adminLogin;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function mount()
    {
        $this->checkVal();
    }

    public function render()
    {
        return view('livewire.index.signin');
    }

    public function signin(){
        
        $cred = $this->validate();

        if ($this->adminLogin) {
            $token = curlOut(''.domain('8080').'/api/adminlogin','POST',$cred);
            // dd($token);
            isset($token->token)
                ? redirecto('admin.dashboard',$token->token)
                :dd('no');
        } else {
            $token = curlOut(''.domain('8080').'/api/login','POST',$cred);
            isset($token->token)
                ? redirecto('member.dashboard',$token->token)
                :dd('no');
        }
        
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
