<?php


function redirecto($url,$token=null){
    if ($token) {
        // envUpdate('BEARER_API_TOKEN', $token);
        // config(['dropservice.BEARER_TOKEN' => $token]);
        session(['token'=>$token]);
    }
    return redirect()->route($url);
}

function curl($url, $method, array $fields = null) {
    
    if (!session('token')) {
        return redirect()->route('index');
    }

    if (session('token')) {
        $curl = curl_init();
        
        if ($fields) {
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer '.session('token').''
            ),
            ));
        } else {
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer '.session('token').''
            ),
            ));
        }
        

        $response = json_decode(curl_exec($curl),true);

        curl_close($curl);

        return $response;
    }

}

function curlOut($url, $method, array $fields) {
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => $method,
    CURLOPT_POSTFIELDS => $fields,
    CURLOPT_HTTPHEADER => array(
        'Accept: application/json'
    ),
    ));

    $response = json_decode(curl_exec($curl));

    curl_close($curl);

    return $response;

}

function curlFi($url, $file, array $fields = null ){
    $curl = curl_init();

    if ($fields) {
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('file'=> new CURLFile($file),$fields),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: multipart/form-data',
            'Authorization: Bearer '.session('token').''
        ),
        ));
    } else {
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($file)),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: multipart/form-data',
            'Authorization: Bearer '.session('token').''
        ),
        ));
    }
    

    $response = curl_exec($curl);

    curl_close($curl);
    dd($response);
}

function domain($apiPort){
    $split = explode(':',$_SERVER['HTTP_HOST']);
    $split[1] = $apiPort;
    $host = $split[0].':'.$split[1];
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                "https" : "http") . "://" . $host;
  
    return $link;
}

function envUpdate($key, $value)
{
    dd(env);
    $path = base_path('.env');

    if (file_exists($path)) {

        file_put_contents($path, str_replace(
            $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
        ));
    }
}