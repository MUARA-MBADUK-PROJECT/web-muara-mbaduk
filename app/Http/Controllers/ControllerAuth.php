<?php

namespace App\Http\Controllers;

// use App\Service\Service;

// use App\Service\ServiceAuth;

use App\Repository\RepositoryAuth;
use App\Service\Service;
use App\Service\ServiceAuth;
use Firebase\JWT\JWT;
use Google\Client;
use Google_Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class ControllerAuth extends Controller
{
    //
    private $service;
    protected $repo;
    protected $client;


    public function __construct()
    {
        $this->service = new ServiceAuth();
    }

    public function index()
    {
        return view('guest.pages.masuk');
    }

    public function googleRedirect()
    {
        return $this->service->googleRedirect();
    }

    public function googleCallback(Request $request)
    {
        $response = $this->service->googleCallback($request);
        $resObj = json_decode($response);
        // dd($resObj->code);

        if ($resObj->code == 200) {
            $jwt = $resObj->data;
            $cookie = cookie('MUARA_MBADUK', $jwt, time() + 3600000);
            return redirect()->route('dashboard')->withCookie($cookie);
            
        }else{
            dd($resObj);
            return redirect()->route('dashboard');
        }

        // $jwt = $resObj->data;
        //     $cookie = cookie('MUARA_MBADUK', $jwt, time() + 3600000, null, env('APP_URL'));
        //     session('MUARA_MBADUK',$jwt);
        //     return redirect()->route('dashboard')->withCookie($cookie);

        
    }
}
