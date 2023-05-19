<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryPages;
use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    //
    private $repo;

    public function __construct() {
        $this->repo = new RepositoryPages;
    }

    public function showPrivacyPolicy()
    {
        return view('guest.pages.privasi',['data'=>$this->repo->getByIdOrSlug('privacy-policy')]);
    }

    public function showTermOfService()
    {

        return view('guest.pages.syarat',['data'=>$this->repo->getByIdOrSlug('d3e87a29-0e65-47ff-8d35-d1acf463f722')]);
    }

    public function showAbout()
    {
        return view('guest.pages.tentang',['data'=>$this->repo->getByIdOrSlug('72fed814-cb3e-4797-b1e3-0bc6c3311062')]);
    }

    public function showPages($slug)
    {
        return view('guest.pages.pages',['data'=>$this->repo->getByIdOrSlug($slug)]);
    }
}
