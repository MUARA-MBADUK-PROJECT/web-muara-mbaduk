<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryNews;
use App\Repository\RepositoryPackage;
use Illuminate\Http\Request;

class ControllerLanding extends Controller
{
    //
    private $repoPackage;
    private $repoNews;

    public function __construct() {
        $this->repoPackage = new RepositoryPackage();
        $this->repoNews = new RepositoryNews();
    }

    public function index()
    {
        $packets = $this->repoPackage->getAll();
        $news = $this->repoNews->getAll();
        // dd($news);
        return view('guest.pages.landing',['packets'=>$packets->data, 'news'=>$news->data]);    
    }
}
