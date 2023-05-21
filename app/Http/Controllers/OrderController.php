<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Repository\RepositoryPackage;
use App\Repository\RepositoryPayment;
use App\Repository\RepositoryTicket;
use App\Service\ServiceAuth;
use Carbon\Carbon;
use Google\Service\CloudSearch\Id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    private $ticketRepo;
    private $packageRepo;
    private $authService;
    private $paymentRepo;

    public function __construct()
    {
        $this->ticketRepo = new RepositoryTicket();
        $this->packageRepo = new RepositoryPackage();
        $this->authService = new ServiceAuth();
        $this->paymentRepo = new RepositoryPayment();
    }
    //
    public function term()
    {
        return view('transaction.pages.order.term');
    }

    public function acceptTerm(Request $request)
    {
        Session::forget('orders');
        // dd($request);
        if ($request->get('accept_term') == 'on') {
            session(['accept_term' => true]);
            return redirect(route('order.chose.page'));
        }

        return redirect(route('order.term.page'))->with(['status' => 'warning', 'message' => 'mohon setujui syarat dan ketentuan terlebih dahulu']);
    }

    public function chose()
    {

        $ticket = $this->ticketRepo->getAll();
        $isWeekDay = $this->isThisWeekend();
        $packages = $this->packageRepo->getAll();
        return view('transaction.pages.order.chose', ['tickets' => $ticket, 'isWeekDay' => $isWeekDay, 'packages' => $packages]);
    }

    public function isThisWeekend()
    {
        $carbonDate = Carbon::now();
        $dayOfWeek = $carbonDate->dayOfWeek;

        // Check if the day falls on Saturday (6) or Sunday (0)
        return ($dayOfWeek === Carbon::SATURDAY || $dayOfWeek === Carbon::SUNDAY);
    }

    public function fillData(Request $request)
    {

        
        $isHadChosPackage = false;

        $orders = [
            'date' => $request->get('date'),
            'camping' => $request->get('camping'),
            'ticket' => $request->get('ticket'),
            'package' => $request->get('package'),
            'total' => $request->get('total')
        ];

        
        foreach ($orders['package'] as $key => $value) {
            if ($value!='0') {
                $isHadChosPackage = true;
            }
        }
        if ($orders['camping']=="true") {
            if (!$isHadChosPackage) {
                return back()->with('message','mohon pilih paket jika ingin berkemah');
            }
        }

        $package = [];
        foreach ($orders['package'] as $key => $value) {
            if ($value > 0) {
                $data = $this->packageRepo->getOne($key)->data;
                array_push($package, ['count' => $value, 'data' => $data]);
                // $package[$key] = $value;
            }
        }

        // Remove non-numeric characters
        $numericString = str_replace(['Rp.', ' ', '.'], '', $orders['total']);

        // Convert to double
        $doubleNumber = (float) $numericString;


        $orders['package'] = $package;
        $orders['total'] = $doubleNumber;

        // dd($orders);

        $ticket = [];
        foreach ($request->get('ticket') as $key => $value) {
            $data = $this->ticketRepo->getById($key);
            array_push($ticket, ['count' => $value, 'data' => $data->data]);
        }




        // $orders['ticket'] = $ticket;


        session(['orders' => $orders]);
        return view('transaction.pages.order.fill', ['ticket' => $ticket]);
    }

    public function chosePaymentMethode(Request $request)
    {
        $orders = $request->session()->get('orders');
        $orders['ticket'] = $request->get('ticket');

        $ticket = [];
        foreach ($orders['ticket'] as $key => $values) {
            $data = $this->ticketRepo->getById($key)->data;
            array_push($ticket, ['identity' => $values, 'data' => $data]);
        }


        // dd($orders['package']);

        $orders['ticket'] = $ticket;


        $request = request();
        $profil = $this->authService->getProfil($request);

        $isWeekDay = $this->isThisWeekend();

        session(['orders' => $orders]);
        return view('transaction.pages.order.chose_payment', [
            'profil' => $profil,
            'orders' => $orders,
            'isWeekDay' => $isWeekDay
        ]);
        // dd($request);
    }

    public function checkout(Request $request)
    {
        // dd($request);
        $profil = $this->authService->getProfil($request);
        $orders = $request->session()->get('orders');
        $payment = $request->get('payment');
        $userId = $profil->id;
        $camping = $orders['camping'];
        $date = date("d/m/Y", strtotime($orders['date']));
        $bank = $request->get('bank');

        if ($orders['camping'] == "true") {
            $camping = true;
        }else {
            $camping = false;
        }

        $packages = [];
        for ($i=0; $i < count($orders['package']); $i++) { 
            $packages[$i] = (object)[
                'id'=>$orders['package'][$i]['data']->id,
                'quantity'=>$orders['package'][$i]['count']
            ];
        }

        $tickets = [];
        foreach ($orders['ticket'] as $key => $value) {
            $idticket = $value['data']->id;
            foreach ($value['identity'] as $key => $value) {
                array_push($tickets,(object)[
                    'id'=>$idticket,
                    'name'=>$value['name'],
                    'identity'=>$value['identity']
                ]);
            }
        }
        if ($payment=='bank') {
            $res = $this->paymentRepo->CheckoutBank($userId,$date,$camping,$bank,$packages,$tickets);
        } else {
            $res = $this->paymentRepo->CheckOutCash($userId,$date,$camping,$packages,$tickets);
        }
        // echo $res;
        // dd($res);
        // dd();
        // Session::forget('orders');
        return redirect(route('history.detail',['id'=>$res->data->order_id]));
    }
}
