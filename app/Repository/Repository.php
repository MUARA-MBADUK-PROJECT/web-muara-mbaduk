<?php

namespace App\Repository;

class Repository
{
    private $apiBaseUrl;
    private $apiVer;
    protected $baseUrl;
    protected $auth;

    public function trimUrl($url)
    {
        if (substr($url, 0, 1) === '/') { // Check if the first character is the one we want to remove
            $url = ltrim($url, '/'); // Remove the character using ltrim
        }

        return $url;
    }

    public function __construct()
    {
        $this->apiBaseUrl = env('API_BASE_URL');
        $this->apiVer = env('API_VERSION', 'v1');
        $this->baseUrl = $this->apiBaseUrl . '/' . $this->apiVer;
        $this->auth = env('API_AUTHORIZATION_KEY');
    }

    public function apiGet($endPoint)
    {
        $curl = curl_init();
        $url = $this->baseUrl . '/' . $this->trimUrl($endPoint);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $this->auth
            ),
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        // dd($response);
        if (300 > $httpCode && $httpCode>=200 || true) {
            return json_decode($response);
        } else {
            return redirect(route('error.500'))->with([
                'status'=>'fail',
                'message'=>$response
            ]);
        }
    }

    public function apiPost(String $endPoint,array $body)
    {
        $curl = curl_init();
        $url = $this->baseUrl . '/' . $this->trimUrl($endPoint);
        $body = json_encode($body);
        
        // dd($body);

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "Authorization: $this->auth;"
            ),
        ));

        $response = curl_exec($curl);
        
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        if (300 > $httpCode && $httpCode >=200 || true) {
            return json_decode($response);
        } else {
            // dd($body);
            echo redirect(route('error.500'))->with([
                'status'=>'fail',
                'message'=>$response
            ]);

            dd();
            
        }
        
        
    }

    public function isSeccess($curl)
    {
        
        
    }
}
