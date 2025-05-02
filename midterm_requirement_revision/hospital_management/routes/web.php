<?php

use App\Http\Controllers\FindingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', [PatientController::class, 'viewPatient']);

Route::get('/view', [PatientController::class, 'index']);
Route::post('/search', [PatientController::class, 'index']);
Route::get('/insert', [PatientController::class, 'insertPatient']);
Route::post('/create', [PatientController::class, 'insert']);
Route::get('/delete/{id}', [PatientController::class, 'deletePatient']);
Route::get('/edit/{id}', [PatientController::class, 'editPatient']);
Route::post('/edit/{id}', [PatientController::class, 'edit']);

Route::get('finding/{id}', [FindingController::class, 'list'])->name('findings.list');
Route::get('finding/{id}/create', [FindingController::class, 'create']);
Route::post('finding/{id}/store', [FindingController::class, 'store']);
Route::get('finding/{id}/edit/{findingId}', [FindingController::class, 'edit'])->name('finding.edit');
Route::put('finding/{id}/update/{findingId}', [FindingController::class, 'update'])->name('finding.update');
Route::delete('finding/{id}/delete/{findingId}', [FindingController::class, 'destroy'])->name('finding.destroy');
Route::resource('findings', FindingController::class);
