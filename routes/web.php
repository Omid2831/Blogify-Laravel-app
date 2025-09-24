<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// About
Route::get('/about', function () {
    return view('/about');
})->name('about');

// Contact 
Route::get('/contact', function(){
    return view('/contact');
})->name('contact');