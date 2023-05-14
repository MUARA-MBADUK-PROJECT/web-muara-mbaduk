<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerBerita;
use App\Http\Controllers\ControllerFAQ;
use App\Http\Controllers\ControllerLanding;
use App\Http\Controllers\ControllerPacket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('about', function () {
    return view('guest.pages.tentang');
})->name('about');

Route::get('term', function () {
    return view('guest.pages.syarat');
})->name('term');

Route::get('policy', function () {
    return view('guest.pages.privasi');
})->name('policy');

Route::prefix('/packet')->name('packet.')->group(function () {
    Route::get('/list', [ControllerPacket::class,'index'])->name('list');
    Route::get('/detail/{id}', [ControllerPacket::class,'getById'])->name('detail');
    Route::get('/more',[ControllerPacket::class,'getMoreReviews'])->name('more');
    Route::get('/custom',[ControllerPacket::class,'viewCustom'])->name('custom');
    Route::post('/custom',[ControllerPacket::class,'sendCustom'])->name('custom.send');
});

Route::get('login', function () {
})->name('login');

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
    Route::get('/{id}', [ControllerBerita::class, 'getConten'])->name('conten');
    Route::get('more/{start}', [ControllerBerita::class, 'getMoreNews'])->name('more');
});

Route::get('faq', [ControllerFAQ::class, 'index'])->name('faq');

Route::get('login', function () {
    return view('guest.pages.masuk');
})->name('login');
Route::get('newpolicy', function () {
    return view('guest.pages.syarat_pemesanan');
})->name('newpolicy');
Route::get('dashboard', function (){
    return view('guest.pages.dashboard');
})->name('dashboard');
Route::get('visitdetails', function (){
    return view('guest.pages.detail_kunjungan');
})->name('visitdetails');
Route::get('no_camping', function (){
    
    return view('guest.pages.detail_kunjungan_non');
})->name('no_camping');



Route::view('tailwind', 'layouts.landing.app');
