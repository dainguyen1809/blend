<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Menu\MenuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/contact', [AboutController::class, 'contact'])->name('contact');

