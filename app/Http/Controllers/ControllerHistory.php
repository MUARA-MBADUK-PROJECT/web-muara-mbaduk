<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHistory extends Controller
{
    //
    public function index()
    {
        return view('users.pages.riwayat_pemesanan');
    }
}
