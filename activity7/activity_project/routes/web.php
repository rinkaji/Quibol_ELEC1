<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/act/{amount}', function($amount){
    return view('activity_7', compact('amount')) ;
});