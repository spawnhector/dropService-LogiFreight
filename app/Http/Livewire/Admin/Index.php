<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
    public $user;
    public function mount(){
        $sent = curl(''.domain('8080').'/api/admin','GET');
        if (isset($sent['id'])) {
            $this->user = $sent;
        } else {
            dd('Something went wrong');
        }
    }

    public function render()
    {
        return view('livewire.admin.index');
    }
}
