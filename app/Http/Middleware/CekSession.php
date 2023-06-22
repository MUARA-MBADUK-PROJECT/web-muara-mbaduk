<?php

namespace App\Http\Middleware;

use App\Repository\RepositoryUser;
use Carbon\Carbon;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\Response;

class CekSession
{
    private $repoUser;

    public function __construct()
    {
        $this->repoUser = new RepositoryUser();
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if ($request->hasCookie('MUARA_MBADUK')) {

            try {
                $jwt = $request->cookie('MUARA_MBADUK');
                $account = $this->repoUser->getProfil($jwt);
                // dd($account);
                $data = $account->data;
                $exp = $data->exp;
                if ($this->isExp($exp)) {
                    return redirect(route('login.view'))->with(['status' => 'warning', 'message' => ' mohon untuk melakukan login terembih dahulu']);
                } else {
                    return $next($request);
                }
            } catch (Exception $e) {
                return back()->with(['status' => 'warning', 'message' => 'terjadi kesalahan server']);
            }


            // return view('guest.pages.dashboard',['acc'=>$account]);

        } else {
            return redirect(route('login.view'))->with(['status' => 'warning', 'message' => 'mohon untuk melakukan login terembih dahulu']);
        }
    }

    public function isExp($exp)
    {
        if ($exp < Carbon::now()->timestamp) {
            return true;
        } else {
            return false;
        }
    }
}
