<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);

// For QR Code route (for student)
Route::get('/students/{id}/qr-code', [StudentController::class, 'showQrCode'])->name('students.showQrCode');

