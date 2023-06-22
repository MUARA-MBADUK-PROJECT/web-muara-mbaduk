<?php

namespace App\Repository;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Client\Request;

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
        $this->apiBaseUrl = env('API_URL');
        $this->apiVer = env('API_VERSION', 'v1');
        $this->baseUrl = $this->apiBaseUrl . '/' . $this->apiVer;
        $this->auth = env('API_AUTHORIZATION_KEY');
    }

    public function apiGet($endPoint)
    {
        // $curl = curl_init();
        $url = $this->baseUrl . '/' . $this->trimUrl($endPoint);

        $curl = curl_init();

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
                'Authorization: ' . $this->baseUrl
            ),
        ));
        // var_dump($this->apiVer);

        return $this->isSuccess($curl);

    }

    public function apiPost(String $endPoint, array $body)
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

        return $this->isSuccess($curl);
    }

    public function apiPut(String $endPoint, $body)
    {
        $url = $this->baseUrl . '/' . $this->trimUrl($endPoint);
        $body = json_encode($body);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: ' . $this->auth
            ),
        ));

        return $this->isSuccess($curl);
    }

    public function isSuccess($curl)
    {
        $response = curl_exec($curl);

    if ($response === false) {
        // An error occurred during the request
        $error = curl_error($curl);
        curl_close($curl);
        // Log the error for debugging purposes
        error_log('API PUT Request Error: ' . $error);
        // Display a generic error message to the end user
        return redirect()->back()->with('status', 'fail')->with('message', 'An error occurred during the API request. Please try again later or contact support.');
    }

    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpCode >= 200 && $httpCode < 300) {
        return json_decode($response);
    } else {
        // Invalid response code
        // Log the error for debugging purposes
        error_log('API PUT Request Failed. Response Code: ' . $httpCode . ', Response Body: ' . $response);
        // Display a generic error message to the end user
        return redirect()->back()->with('status', 'fail')->with('message', 'The API request failed. Please try again later or contact support.');
    }
    }
}
