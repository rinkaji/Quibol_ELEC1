<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', [studentController::class, 'insertform']);
Route::post('/create', [studentController::class, 'insert']);
Route::get('/view-records', [studentController::class, 'index']);
Route::get('edit/{id}',[studentController::class, 'show']);
Route::post('edit/{id}', [studentController::class, 'edit']);
Route::get('/delete/{id}', [studentController::class, 'delete']);
