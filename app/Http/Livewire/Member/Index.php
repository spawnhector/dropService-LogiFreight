<?php

namespace App\Http\Livewire\Member;

use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{

    public 
    // -------------------------------------//
    // Variables for profile
    // -------------------------------------//
    $member,$member_info,$progress,
    $completeProgress,$preAlert,$activity,
    $active_screen = 1,
    // -------------------------------------//
    // Variables for profile complete
    // -------------------------------------//
    $edit_nm,$nm,$edit_dob,$dob,$edit_org,
    $org,$t_c,$p_p,$edit_email,$email,
    $edit_number,$number,$edit_address,
    $address,$edit_trn,$trn,
    // -------------------------------------//
    // Variables for slide view
    // -------------------------------------//
    $viewPreAlert,$viewPackage,$viewTransit,
    $viewDelivery,$viewPreAlert_id,$viewPackage_id,
    $viewTransit_id,$viewDelivery_id,$viewPreAlert_disable,
    $viewPackage_disable,$viewTransit_disable,
    $viewDelivery_disable,
    // -------------------------------------//
    // Variables for slide setting
    // -------------------------------------//
    $slideSettingId,$slideSettingNm,$slideSetting=false,
    $slideSettingBtn=true,$slideEnable,
    // -------------------------------------//
    // to separate each toggle btn
    // -------------------------------------//
    $preAlertToggle,$packageToggle,$transitToggle,
    $preAlertSettingToggle,$packageSettingToggle,
    $transitSettingToggle;

    protected $listeners =[
        'refreshField'=>'refreshField',
        '$refresh',
    ];

    public function mount()
    {
        $this->setMember();

        if ($this->member) {

            if ($this->member['name']){
            }
            if ($this->member['profile_prog'] < 100) {
                $this->completeProgress = false;
                $this->progress = $this->member['profile_prog'];
            }
    
            if ($this->member['profile_prog'] == 100) {
                $this->completeProgress = true;

                if (!$this->member_info) {
                    if ($test = $this->generateTempAddress()) {
                        $this->member_info = $test;
                        session(['UMI'=>$test['success']['umi']]);
                    } else {
                        $this->mainResult = 'Something went wrong when generating address';
                    }
                }

                $this->preAlert = $this->getPreAlert();
                $this->Slide();
                $this->activity();
                $this->progress = $this->member['profile_prog'];
            }
        }
    }

    public function render()
    {
        return view('livewire.member.index');
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

    public function edit($type){
        if ($type == 'name') {
            $this->edit_nm = true;
        }
        if ($type == 'dob') {
            $this->edit_dob = true;
        }
        if ($type == 'org') {
            $this->edit_org = true;
        }
        if ($type == 'email') {
            $this->edit_email = true;
        }
        if ($type == 'number') {
            $this->edit_number = true;
        }
        if ($type == 'address') {
            $this->edit_address = true;
        }
        if ($type == 'trn') {
            $this->edit_trn = true;
        }
    }

    public function save($type){
        if ($type == 'name') {
            $fields= [
                'id' => $this->member['id'],
                'name' => $this->nm,
                'prog' => $this->checkProg(function(){
                    if ($this->member['name'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_nm = false;
        }
        if ($type == 'dob') {
            $fields= [
                'id' => $this->member['id'],
                'dob' => $this->dob,
                'prog' => $this->checkProg(function(){
                    if ($this->member['dob'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_dob = false;
        }
        if ($type == 'org') {
            $fields= [
                'id' => $this->member['id'],
                'org' => $this->org,
                'prog' => $this->checkProg(function(){
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_org = false;
        }
        if ($type == 'email') {
            $fields= [
                'id' => $this->member['id'],
                'email' => $this->email,
                'prog' => $this->checkProg(function(){
                    if ($this->member['email'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_email = false;
        }
        if ($type == 'number') {
            $fields= [
                'id' => $this->member['id'],
                'number' => $this->number,
                'prog' => $this->checkProg(function(){
                    if ($this->member['phone'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_number = false;
        }
        if ($type == 'address') {
            $fields= [
                'id' => $this->member['id'],
                'address' => 'add',
                'country' => $this->country,
                'city' => $this->city,
                'state' => $this->state,
                'district' => $this->district,
                'postal' => $this->postal,
                'prog' => $this->checkProg(function(){
                    if ($this->member['country'] == null) {
                        return '30';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->emit('refreshField');
        }
        if ($type == 'trn') {
            $fields= [
                'id' => $this->member['id'],
                'trn' => $this->trn,
                'prog' => $this->checkProg(function(){
                    if ($this->member['trn'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_trn = false;
        }
        if ($type == 't_c') {
            $fields= [
                'id' => $this->member['id'],
                't_c' => '1',
                'prog' => $this->checkProg(function(){
                    if ($this->member['t_c'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_trn = false;
        }
        if ($type == 'p_p') {
            $fields= [
                'id' => $this->member['id'],
                'p_p' => '1',
                'prog' => $this->checkProg(function(){
                    if ($this->member['p_p'] == null) {
                        return '10';
                    }
                    return false;
                })
            ];
            curl(''.domain('8080').'/api/member/update','POST',$fields);
            $this->edit_trn = false;
        }
    }

    public function checkProg($i){
        
        if ($i()) {
            return $this->member['profile_prog'] + $i();
        }

        return $this->member['profile_prog'];
    }

    public function refreshField(){
        $this->country = '';
        $this->city = '';
        $this->state = '';
        $this->district = '';
        $this->postal = '';
    }

    public function generateTempAddress(){
        $response = curl(''.domain('8080').'/api/member/generatetempaddress','POST');
        if ($response['success']) {
            return $response;
        } else {
            return false;
        }
        
    }

    public function getPreAlert(){
        $field = array('umi' => $this->member_info['success']['umi']);
        $response = curl(''.domain('8080').'/api/member/prealert','POST',$field);
        if ($response['success'] != 'empty') {
            return $response['success'];
        } else {
            return false;
        }
        
    }

    public function enableSlide($id,$bypass = null){
        if ($bypass) {
            $fields = [
                'id'=>$id,
                'status'=>'1',
                'bypass'=>'true',
                'umi'=>session('UMI')
            ];
        }else{
            $fields = [
                'id'=>$id,
                'status'=>'1',
                'umi'=>session('UMI')
            ];
        }
        $sent = curl(''.domain('8080').'/api/member/enableslide','POST',$fields);
        if(isset($sent['success'])){
            redirecto('member.dashboard')->with([
                'mainResult'=>'Slide Enabled',
                'resultType'=>'success'
            ]);
        }else{
            if(isset($sent['error'])){
                session(['mainResult' => $sent['error']]);
                session(['resultType'=>'error']);
            }else{
                session(['mainResult' => 'Something went wrong!']);
                session(['resultType'=>'error']);
            }
        }
    }

    public function disableSlide($id){
        $fields = [
            'id'=>$id,
            'status'=>'3',
            'umi'=>session('UMI')
        ];
        $sent = curl(''.domain('8080').'/api/member/disableslide','POST',$fields);
        if(isset($sent['success'])){
            redirecto('member.dashboard')->with([
                'mainResult'=>'Slide Disabled',
                'resultType'=>'success'
            ]);
        }else{
            if(isset($sent['error'])){
                session(['mainResult' => $sent['error']]);
                session(['resultType'=>'error']);
            }else{
                session(['mainResult' => 'Something went wrong!']);
                session(['resultType'=>'error']);
            }
        }
            
    }

    public function Slide(){
        $slide = curl(''.domain('8080').'/api/member/slide','GET');
        foreach ($slide['success'] as $item) {
            if ($item['name'] == 'prealert') {
                if ($item['status'] == '1') {
                    $this->viewPreAlert = true;
                    $this->slideEnable = true;
                }
                if ($item['status'] == '3') {
                    $this->slideEnable = true;
                    $this->viewPreAlert_disable = true;
                }
                $this->viewPreAlert_id = $item['id'];
            }
            if ($item['name'] == 'package') {
                if ($item['status'] == '1') {
                    $this->viewPackage = true;
                    $this->slideEnable = true;
                }
                if ($item['status'] == '3') {
                    $this->slideEnable = true;
                    $this->viewPackage_disable = true;
                }
                $this->viewPackage_id = $item['id'];
            }
            if ($item['name'] == 'transit') {
                if ($item['status'] == '1') {
                    $this->viewTransit = true;
                    $this->slideEnable = true;
                }
                if ($item['status'] == '3') {
                    $this->slideEnable = true;
                    $this->viewTransit_disable = true;
                }
                $this->viewTransit_id = $item['id'];
            }
            if ($item['name'] == 'delivery') {
                if ($item['status'] == '1') {
                    $this->viewDelivery = true;
                    $this->slideEnable = true;
                }
                if ($item['status'] == '3') {
                    $this->slideEnable = true;
                    $this->viewDelivery_disable = true;
                }
                $this->viewDelivery_id = $item['id'];
            }
        }
    }

    public function slideSetting($slide,$slide_nm){
        $this->slideSettingId = $slide;
        $this->slideSettingNm = $slide_nm;
        $this->slideSetting = true;
        $this->slideSettingBtn = false;
    }

    public function activity(){
        $activity = curl(''.domain('8080').'/api/member/activity','GET');
        // dd($activity);
        isset($activity['success'])
            ? $this->activity = $activity['success']
            : $this->activity = false;
    }


}
