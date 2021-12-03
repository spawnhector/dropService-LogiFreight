<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;


class Nav extends Component
{
    public $member;


    public function mount()
    {
        $this->setMember();
    }
    
    public function render()
    {
        return view('livewire.member.nav');
    }

    public function setMember(){
        if (!session()->has('token')) {
            return redirect()->route('index');
        }

        if (session()->has('token')) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => ''.domain('8080').'/api/member',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer '.session('token').''
            ),
            ));

            $response = json_decode(curl_exec($curl),true);

            curl_close($curl);

            if (isset($response->message)) {
                return redirect()->route('index');
            }

            $this->member = $response;
        }
    }

    public function logout(){
        
        $sent = curl(''.domain('8080').'/api/member/logout','POST');
        if(isset($sent['success'])){
            session()->flush();
            redirecto('index')->with([
                'mainResult'=>'Logout success',
                'resultType'=>'success'
            ]);
        }
    }
}
