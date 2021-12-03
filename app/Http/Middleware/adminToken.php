<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session('token')) {
            return redirect()->route('index');
        }

        if (session('token')) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => ''.domain('8080').'/api/admin',
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

            $response = json_decode(curl_exec($curl));

            curl_close($curl);

            if (isset($response->message)) {
                return redirect()->route('index');
            }

            if ($response->id) {
                return $next($request);
            }else {
                return redirect()->route('index');
            }
        }
    }
}
