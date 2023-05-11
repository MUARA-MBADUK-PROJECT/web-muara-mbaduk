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

// Route::get('about',[ControllerPages::class,'showAbout'])->name('about');

// Route::get('term', [ControllerPages::class,'showTermOfService'])->name('term');

// Route::get('policy', [ControllerPages::class,'showPrivacyPolicy'])->name('policy');

Route::prefix('/packet')->name('packet.')->group(function () {
    Route::get('/list', [ControllerPacket::class, 'index'])->name('list');
    Route::get('/detail/{slug}', [ControllerPacket::class, 'getBySlug'])->name('detail');
    Route::get('/more', [ControllerPacket::class, 'getMoreReviews'])->name('more');
    Route::get('/custom', [ControllerPacket::class, 'viewCustom'])->name('custom');
    Route::post('/custom', [ControllerPacket::class, 'sendCustom'])->name('custom.send');
});

Route::prefix('login')->name('login.')->group(
    function () {
        Route::get('/', function () {
            return view('guest.pages.masuk');
        })->name('view');
        Route::prefix('google')->name('google.')->group(function () {
            Route::get('/auth/redirect', [ControllerAuth::class,'googleRedirect'])->name('redirect');

            Route::get('/auth/callback', [ControllerAuth::class,'googleCallback'])->name('callback');
        });
    }
);

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

// Route::get('login', function () {
//     return view('guest.pages.masuk');
// })->name('login');

Route::get('New_Policiy', function () {
    return view('guest.pages.syarat_pemesanan');
})->name('New_Policiy');

Route::get('dashboard', [ControllerDashboard::class, 'index'])->name('dashboard');

Route::prefix('history')->name('history.')->group(function () {
    Route::get('/', [ControllerHistory::class, 'index'])->name('index');
    Route::get('/detail/{id}', [ControllerHistory::class, 'detail'])->name('detail');
});

Route::get('ticket', [ControllerTicket::class, 'index'])->name('ticket');

Route::view('tailwind', 'layouts.landing.app');

Route::get('kuki',function ()
{
    $response = new Response('Hello World');
    $cookie = cookie('name', 'sbuah nilai', 0); // 600 minutes = 10 hours
    $response->withCookie($cookie);

    return $response;
});

Route::get('skuki',function (Request $request)
{
    dd($request);
});
