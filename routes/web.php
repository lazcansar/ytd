<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\CrashController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;


// Pages View
Route::get('/', [Pages::class, 'homePage'])->name('home');
Route::get('/iletisim', [Pages::class, 'contactPage'])->name('contact');
Route::get('/hakkimda', [Pages::class, 'aboutPage'])->name('about');
Route::get('/trafik-kaza-danismanlik-hizmeti', [Pages::class, 'servicesPage'])->name('services');
Route::get('/trafik-kazasi-danisma', [Pages::class, 'crashPage'])->name('crash');
Route::get('/ceza-tutanagi-danisma', [Pages::class, 'reportPage'])->name('report');
Route::get('/giris-yap', [Pages::class, 'loginPage'])->name('login');

// Upload Files
Route::post('/trafik-kazasi-upload', [CrashController::class, 'uploadFile'])->name('upload.crash');
Route::post('/trafik-cezasi-upload', [ReportController::class, 'uploadReport'])->name('upload.report');
Route::post('/iletisim-gonder', [ContactController::class, 'sendMessage'])->name('contact.form');
