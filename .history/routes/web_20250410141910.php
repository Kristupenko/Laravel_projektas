<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Apsaugoti studentų CRUD maršrutus su autentifikacija
Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
});

Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/send-pdf-email', [PDFController::class, 'sendEmailWithPDF']);
// Breeze sugeneruoti autentifikacijos maršrutai
require __DIR__.'/auth.php';
