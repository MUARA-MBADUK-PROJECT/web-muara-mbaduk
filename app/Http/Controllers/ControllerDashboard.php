<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryUser;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    protected $repoUser;

    public function __construct()
    {
        $this->repoUser = new RepositoryUser;
    }

    public function index(Request $request)
    {
        // dd($request);
        if ($request->hasCookie('MUARA_MBADUK')) {
            // dd(cookie('MUARA_MBADUK'));
            $account = $this->repoUser->getAccount();
            return view('guest.pages.dashboard',['acc'=>$account]);
            // dd($account);
        } else {
            // dd('cookie tidak ada');
            // The client does not have a cookie named 'name'
            return view('guest.pages.dashboard');
        }
        
        
            // dd($request);
        
        
    }
}
