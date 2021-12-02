<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Livewire\WithFileUploads;

class Createprealert extends Component
{
    use WithFileUploads;
    public
    $package_nm,
    $track_no,
    $shipper,
    $contents,
    $invoice_total,
    $courier,
    $weight,
    $file,
    $promo_code;

    protected $rules = [
        'package_nm' => 'required',
        'track_no' => 'required',
        'shipper' => 'required',
        'contents' => 'required',
        'invoice_total' => 'required',
        'courier' => 'required',
        'weight' => 'required',
        'file' => 'required',
    ];

    public function createPreAlert(){
        $this->validate();

        $filepath = $this->file->store('member_file');
        if ($this->promo_code) {
            $fields = [
                'umi'=>session('UMI'),
                'package_nm' => $this->package_nm,
                'track_nm' => $this->track_no,
                'shipper' => $this->shipper,
                'content' => $this->contents,
                'invoice_total' => $this->invoice_total,
                'courier' => $this->courier,
                'weight' => $this->weight,
                'file' => $filepath,
                'promo' => $this->promo_code,
            ];
        } else {
            $fields = [
                'umi'=>session('UMI'),
                'package_nm' => $this->package_nm,
                'track_nm' => $this->track_no,
                'shipper' => $this->shipper,
                'content' => $this->contents,
                'invoice_total' => $this->invoice_total,
                'courier' => $this->courier,
                'weight' => $this->weight,
                'file' => $filepath,
            ];
        }
        $result = curl(''.domain('8080').'/api/member/prealert/create','POST',$fields);
        isset($result['success'])
            ? redirecto('member.dashboard')->with([
                'mainResult'=>$result['success'],
                'resultType'=>'success'
            ])
            : redirecto('member.dashboard')->with([
                'mainResult'=>$result['error'],
                'resultType'=>'error'
            ]);
    }

    public function render()
    {
        return view('livewire.member.createprealert');
    }

}
