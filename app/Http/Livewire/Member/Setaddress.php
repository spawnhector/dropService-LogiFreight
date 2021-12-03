<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;

class Setaddress extends Component
{
    public 
    $country,
    $city,
    $state,
    $district,
    $emptyAddField = true,
    $postal;
    public function mount()
    {
        // $this->setMember();
        $this->checkAddVal();
    }

    public function render()
    {
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
