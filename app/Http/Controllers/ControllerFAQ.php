<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryFaq;
use Illuminate\Http\Request;

class ControllerFAQ extends Controller
{
    private $repo;

    public function __construct() {
        $this->repo = new RepositoryFaq();
    }
    //
    public function index()
    {
        $data = $this->repo->getAll();

        return view('guest.pages.faq',['data'=>$data->data]);
    }
}
