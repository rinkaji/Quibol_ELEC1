<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer/{id}/{name}/{address}',[OrderController::class, 'viewCustomer']);
Route::get('/item/{itemNo}/{itemName}/{price}',[OrderController::class, 'viewItem']);
Route::get('/order/{cutomerId}/{orderName}/{orderNo}/{date}',[OrderController::class, 'viewOrder']);
Route::get('/orderDetails/{transNo}/{orderNo}/{item}/{id}/{name}/{price}/{qty}',[OrderController::class, 'viewOrderDetails']);
