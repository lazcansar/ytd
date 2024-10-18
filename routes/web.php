<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\CrashController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

// Get Routing
Route::get('/', [Pages::class, 'homePage'])->name('home');
Route::get('/iletisim', [Pages::class, 'contactPage'])->name('contact');
Route::get('/hakkimda', [Pages::class, 'aboutPage'])->name('about');
Route::get('/trafik-kaza-danismanlik-hizmeti', [Pages::class, 'servicesPage'])->name('services');
Route::get('/trafik-kazasi-danisma', [Pages::class, 'crashPage'])->name('crash');
Route::get('/ceza-tutanagi-danisma', [Pages::class, 'reportPage'])->name('report');
Route::get('/kullanim-sartlari', [Pages::class, 'termsPage'])->name('terms');
Route::get('/gizlilik-politikasi', [Pages::class, 'privacyPage'])->name('privacy');
Route::get('/giris-yap', [Pages::class, 'loginPage'])->name('login');
Route::get('/kayit-ol', [Pages::class, 'registerPage'])->name('register');

// Admin Routing
Route::get('/admin/dashboard', [Pages::class, 'adminPage'] )->name('admin.home')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/crash-detail/{id}', [CrashController::class, 'crashView'])->name('crash.view')->middleware('auth');
Route::DELETE('/admin/crash-delete/{id}', [CrashController::class, 'crashDelete'])->name('crash.delete')->middleware('auth');

Route::get('/admin/report-detail/{id}', [ReportController::class, 'reportView'])->name('report.view')->middleware('auth');
Route::DELETE('/admin/report-delete/{id}', [ReportController::class, 'reportDelete'])->name('report.delete')->middleware('auth');





// POST Routing
Route::post('/trafik-kazasi-upload', [CrashController::class, 'uploadFile'])->name('upload.crash');
Route::post('/trafik-cezasi-upload', [ReportController::class, 'uploadReport'])->name('upload.report');
Route::post('/iletisim-gonder', [ContactController::class, 'sendMessage'])->name('contact.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.user');
Route::post('/login', [AuthController::class, 'login'])->name('login.user');
