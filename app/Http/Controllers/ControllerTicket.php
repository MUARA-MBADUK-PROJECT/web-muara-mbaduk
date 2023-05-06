<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryTicket;
use Illuminate\Http\Request;

class ControllerTicket extends Controller
{
    private $repo;

    public function __construct() {
        $this->repo = new RepositoryTicket();
    }
    //
    public function index()
    {
        // $data = $this->repo->getAll();

        $ticketTourist = $this->repo->getByCategory('tourist');
        $ticketTransport = $this->repo->getByCategory('transport');

        return view('transaction.pages.harga-ticket',['tourist'=>$ticketTourist,'transport'=>$ticketTransport]);
    }
}
