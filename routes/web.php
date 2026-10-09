<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home & About Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// News, Joining, Results Routes
Route::get('/news', [HomeController::class, 'news'])->name('news.index');
Route::get('/joining-instructions', [HomeController::class, 'joining'])->name('joining.index');
Route::get('/exam-results', [HomeController::class, 'results'])->name('results.index');

// Contact Us Route
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');