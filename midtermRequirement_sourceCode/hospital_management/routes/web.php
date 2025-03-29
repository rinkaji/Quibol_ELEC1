<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', [PatientController::class, 'viewPatient']);

Route::get('/view',[PatientController::class, 'index']);
Route::post('/search',[PatientController::class, 'index']);
Route::get('/insert',[PatientController::class, 'insertPatient']);
Route::post('/create', [PatientController::class, 'insert']);
Route::get('/delete/{id}', [PatientController::class, 'deletePatient']);
Route::get('/edit/{id}', [PatientController::class, 'editPatient']);
Route::post('/edit/{id}', [PatientController::class, 'edit']);