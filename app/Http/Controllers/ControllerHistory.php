<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryPayment;
use App\Repository\RepositoryTicket;
use App\Repository\RepositoryUser;
use App\Service\ServiceAuth;
use Illuminate\Http\Request;

class ControllerHistory extends Controller
{

    private RepositoryTicket $repo;
    private RepositoryPayment $repoPayment;
    private ServiceAuth $serviceAuth;

    public function __construct() {
        $this->repo = new RepositoryTicket();
        $this->repoPayment = new RepositoryPayment();
        $this->serviceAuth = new ServiceAuth();
    }

    //
    public function index()
    {
        $request = request();
        $profil = $this->serviceAuth->getProfil($request);
        $payment = $this->repoPayment->getByUser($profil->id);

        $history = [];
        foreach ($payment->data as $key => $value) {
            $ticketPackage = $this->repoPayment->getById($value->order_id)->data;
            array_push($history,['payment'=>$payment->data[$key],'tickets'=>$ticketPackage->tickets,'packages'=>$ticketPackage->packages]);
        }

        
        return view('users.pages.history.index', ['history' => $history]);
    }

    public function detail($id)
    {

        $payment = $this->repoPayment->getById($id);
        $tickets = [];
        foreach ($payment->data->tickets as $key => $value) {
            if (isset($tickets[$value->title])) {
                $tickets[$value->title]['count']++;
                $tickets[$value->title]['price']= $tickets[$value->title]['price'] + $value->price ;
            }else{
                $tickets[$value->title] = ['count'=>1,'price'=>$value->price,'category'=>$value->category];
            }
        }

        $packages = [];
        foreach ($payment->data->packages as $key => $value) {
            if (isset($packages[$value->title])) {
                $packages[$value->title]['count']++;
                $packages[$value->title]['price']= $packages[$value->title]['price'] + $value->price ;
            }else{
                $packages[$value->title] = ['count'=>1,'price'=>$value->price];
            }
        }

        $profil = $this->serviceAuth->getProfil(request());
        return view('users.pages.history.detail', ['data' => $payment->data,'profil'=>$profil,'tickets'=>$tickets, 'packages'=>$packages]);
    }
}
