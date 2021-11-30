<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Http\Livewire\Member\Index;

class Setaddress extends Index
{
    public 
    $country,
    $city,
    $state,
    $district,
    $emptyAddField = true,
    $postal;

    public function render()
    {
        $this->setMember();
        $this->checkAddVal();
        return view('livewire.member.setaddress');
    }
    
    public function checkAddVal(){
        $this->emptyAddField = false;
        if ($this->country) {

        } else {
            $this->emptyAddField = true;
        }
        $this->emptyAddField = false;
        if ($this->city) {

        } else {
            $this->emptyAddField = true;
        }
        $this->emptyAddField = false;
        if ($this->state) {

        } else {
            $this->emptyAddField = true;
        }
        $this->emptyAddField = false;
        if ($this->district) {

        } else {
            $this->emptyAddField = true;
        }

        if ($this->postal) {
            $this->emptyAddField = false;
        } else {
            $this->emptyAddField = true;
        }
        
    }
}
