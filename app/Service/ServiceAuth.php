<?php

namespace App\Service;

use App\Repository\RepositoryAuth;
use App\Repository\RepositoryUser;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Facades\JWTAuth;
use Google\Client;
use Illuminate\Http\Response;

class ServiceAuth extends Service
{
    protected $repo;
    protected $client;
    protected $res;
    protected $repoUser;

    public function __construct()
    {
        $this->repoUser = new RepositoryUser();
        $this->res = new Response('account');
        $this->repo = new RepositoryAuth();
        $this->client = new Client;
        $this->client->setClientId(config('services.google.client_id'));
        $this->client->setClientSecret(config('services.google.client_secret'));
        $this->client->setRedirectUri(config('services.google.redirect'));
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function googleRedirect()
    {
        // return Socialite::driver('google')->redirect();
        $auth_url = $this->client->createAuthUrl();
        // dd($auth_url);
        return redirect()->to($auth_url);
    }

    public function googleCallback(Request $request)
    {
        // dd($request);
        // $this->service->googleLogin();
        $this->client->authenticate($request->get('code'));
        $token = $this->client->getAccessToken();

        // dd($this->client);
        $jwt = $token['id_token'];
        $response = $this->repo->googleLogin($jwt);

        // Redirect ke halaman dashboard atau halaman yang diinginkan
        return $response;
    }

    public function getProfil($request)
    {
        
        if ($request->hasCookie('MUARA_MBADUK')) {
            $jwt = $request->cookie('MUARA_MBADUK');
            $account = $this->repoUser->getProfil($jwt);
            // dd($account);
            $profil = json_decode($account)->data;

            return $profil;
        }

        return null;
    }

    
}
