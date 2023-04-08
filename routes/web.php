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
})->name('tentang');

Route::get('policy',function(){
    return view('guest.pages.syarat');
});
Route::view('tailwind','layouts.landing.app');

