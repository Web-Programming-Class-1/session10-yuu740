<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function(){
    $lang = request('lang', 'id');
    App::setLocale($lang);

    return view('product', ['lang' => $lang]);
})->name('product');

Route::get('/{locale}/product', function($locale){
    $lang = request('locale');
    App::setLocale($locale);

    return view('product', ['lang' => $lang]);
})->name('product');
