<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

// Redirect / ke /home
Route::get('/', function () {
    return redirect('/home');
});

// HomeController: Home, About, Contact
Route::get('/home',    [HomeController::class, 'index'])->name('home');
Route::get('/about',   [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// BlogController: Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
