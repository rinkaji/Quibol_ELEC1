<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DragonBall;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/animal', [AnimalController::class, 'findingAnimal']);
