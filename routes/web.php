<?php

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

Route::get('/', function () {
    return view('guest.pages.landing');
})->name('home');

Route::get('about',function(){
    return view('guest.pages.tentang');
})->name('about');

Route::get('term',function(){
    return view('guest.pages.syarat');
})->name('term');

Route::get('policy',function(){
    return view('guest.pages.privasi');
})->name('policy');
Route::view('tailwind','layouts.landing.app');

Route::get('login', function () {
    return view('guest.pages.masuk');
})->name('login');