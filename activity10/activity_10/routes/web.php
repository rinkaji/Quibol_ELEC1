<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/registering', [RegisterController::class, 'register']);

Route::get('/login', [RegisterController::class, 'showLoginForm'])->name('login');
Route::post('/loggingIn', [RegisterController::class, 'loggingIn']);

Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});
