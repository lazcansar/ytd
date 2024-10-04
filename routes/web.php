<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;


Route::get('/', [Pages::class, 'homePage'])->name('home');
Route::get('/iletisim', [Pages::class, 'contactPage'])->name('contact');
Route::get('/hakkimda', [Pages::class, 'aboutPage'])->name('about');
Route::get('/trafik-kaza-danismanlik-hizmeti', [Pages::class, 'servicesPage'])->name('services');
