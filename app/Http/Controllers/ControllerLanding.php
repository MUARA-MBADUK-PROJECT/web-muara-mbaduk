<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryNews;
use App\Repository\RepositoryPackage;
use App\Repository\RepositoryTestimonie;
use Illuminate\Http\Request;

class ControllerLanding extends Controller
{
    //
    private $repoPackage;
    private $repoNews;
    private $repoTestimonie;

    public function __construct() {
        $this->repoPackage = new RepositoryPackage();
        $this->repoNews = new RepositoryNews();
        $this->repoTestimonie = new RepositoryTestimonie();
    }

    public function index()
    {
        $packets = $this->repoPackage->getAll();
        $news = $this->repoNews->getAll();
        $testimonie = $this->repoTestimonie->getAll();
        // dd($news);
        return view('guest.pages.landing',['packets'=>$packets->data, 'news'=>$news->data,'testimonie'=>$testimonie->data]);    
    }
}
