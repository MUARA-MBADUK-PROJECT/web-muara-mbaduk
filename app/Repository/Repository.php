<?php

namespace App\Repository;

class Repository{
    private $apiBaseUrl;
    private $apiVer;
    protected $baseUrl;
    protected $auth;

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
        $url = $this->baseUrl .'/'. $endPoint;

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
                'Authorization: '. $this->auth
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
        // return $url;
    }
}