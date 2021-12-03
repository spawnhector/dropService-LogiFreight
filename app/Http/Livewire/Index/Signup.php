<?php

namespace App\Http\Livewire\Index;

use access;
use Livewire\Component;

class Signup extends Component
{
    public $email,
    $password,
    $confirm,
    $c_password;


    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'c_password' => 'required|same:password'
    ];

    public function checkVal(){

        if (!empty($this->email)) {
            $this->resetValidation('email');
        }

        if (!empty($this->password)) {
            $this->resetValidation('password');
        }

        if (!empty($this->c_password)) {
            $this->resetValidation('c_password');
        }

        if (!empty($this->confirm)) {
            $this->resetValidation('confirm');
        }

    }

    public function signUp(){
        $this->validate();
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => ''.domain('8080').'/api/register',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'email' => $this->email,
            'password' => $this->password,
            'c_password' => $this->c_password
        ),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
            ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);
        isset($response->token)
            ? redirecto('member.dashboard',$response->token)
            :dd('no');
    }

    
    public function mount()
    {
        $this->checkVal();
    }

    public function render()
    {
        return view('livewire.index.signup');
    }
}
