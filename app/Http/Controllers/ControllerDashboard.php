<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryUser;
use App\Service\ServiceAuth;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    protected $repoUser;
    protected $AuthService;

    public function __construct()
    {
        $this->AuthService = new ServiceAuth;
        $this->repoUser = new RepositoryUser;
    }

    public function index(Request $request)
    {


        $profil = $this->AuthService->getProfil($request);
        return view('users.pages.dashboard',['profil'=>$profil]);

        // dd($request);


    }
}
