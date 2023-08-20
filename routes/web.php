<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/panel', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware'=>['auth','isAdmin'],'prefix'=> 'admin'],function(){
 Route::get('deneme',function() { 
   return "prefix testi";  
 });
});
