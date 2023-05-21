<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerBerita;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerFAQ;
use App\Http\Controllers\ControllerHistory;
use App\Http\Controllers\ControllerLanding;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerPacket;
use App\Http\Controllers\ControllerPages;
use App\Http\Controllers\ControllerTicket;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\CekSession;
use App\Http\Middleware\IsLoged;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControllerLanding::class, 'index'])->name('landing');
Route::get('pages/{slug}', [ControllerPages::class, 'showPages'])->name('pages');

Route::prefix('/packet')->name('packet.')->group(function () {
    Route::get('/list', [ControllerPacket::class, 'index'])->name('list');
    Route::get('/detail/{slug}', [ControllerPacket::class, 'getBySlug'])->name('detail');
    Route::get('/more', [ControllerPacket::class, 'getMoreReviews'])->name('more');
    Route::get('/custom', [ControllerPacket::class, 'viewCustom'])->name('custom');
    Route::post('/custom', [ControllerPacket::class, 'sendCustom'])->name('custom.send');
});

Route::prefix('login')->name('login.')->group(
    function () {
        Route::get('/', [ControllerAuth::class, 'index'])->name('view')->middleware(IsLoged::class);

        Route::prefix('google')->name('google.')->group(function () {
            Route::get('/auth/redirect', [ControllerAuth::class, 'googleRedirect'])->name('redirect');
            Route::get('/auth/callback', [ControllerAuth::class, 'googleCallback'])->name('callback');
        });
    }
);

Route::get('logout',[ControllerAuth::class,'logout'])->name('logout');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', function () {
        return view('guest.pages.kontak');
    })->name('show');

    Route::post('send', function (Request $request) {
        dd($request);
    })->name('send');
});

Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [ControllerBerita::class, 'index'])->name('show');
    Route::get('/{slug}', [ControllerBerita::class, 'getConten'])->name('conten');
    Route::get('more/{start}', [ControllerBerita::class, 'getMoreNews'])->name('more');
});

Route::get('faq', [ControllerFAQ::class, 'index'])->name('faq');


Route::get('newpolicy', function () {
    return view('guest.pages.syarat_pemesanan');
})->name('newpolicy');

// Route::get('visitdetails', function () {
//     return view('guest.pages.detail_kunjungan');
// })->name('visitdetails');
// Route::get('no_camping', function () {
//     return view('guest.pages.detail_kunjungan_non');
// })->name('no_camping');
// Route::get('camping', function () {
//     return view('guest.pages.detail_kunjungan_camping');
// })->name('camping');
// Route::get('wisatawan', function () {
//     return view('guest.pages.detail_wisatawan');
// })->name('wisatawan');
// Route::get('rincian_camping', function () {
//     return view('guest.pages.rincian_pemesanan_camping');
// })->name('rincian_camping');
// Route::get('rincian_non_camping', function () {
//     return view('guest.pages.rincian_pemesanan_non_camping');
// })->name('rincian_non_camping');





Route::get('ticket', [ControllerTicket::class, 'index'])->name('ticket');

Route::middleware(CekSession::class)->group(function () {
    Route::prefix('history')->name('history.')->group(function () {
        Route::get('/', [ControllerHistory::class, 'index'])->name('page');
        Route::any('/detail/{id}', [ControllerHistory::class, 'detail'])->name('detail');
        Route::post('/review',[ControllerHistory::class,'review'])->name('review');
    });
    Route::get('dashboard', [ControllerDashboard::class, 'index'])->name('dashboard');

    Route::prefix('order')->name('order.')->group(function () {
        Route::name('term.')->group(function () {
            Route::get('term', [OrderController::class, 'term'])->name('page');
            Route::post('term', [OrderController::class, 'acceptTerm'])->name('accept');
        });
        Route::name('chose.')->group(function () {
            Route::get('chose', [OrderController::class, 'chose'])->name('page');
            Route::post('filldata' ,[OrderController::class,'fillData'])->name('fill');
        });

        Route::post('paymentmethod',[OrderController::class,'chosePaymentMethode'])->name('paymentMethod');
        Route::post('checkout',[OrderController::class,'checkout'])->name('checkout');
    });
});

Route::any('error500',function ()
{
    return view('error.500error');
})->name('error.500');