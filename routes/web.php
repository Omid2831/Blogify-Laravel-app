<?php

use App\Http\Controllers\Headers\AboutController;
use App\Http\Controllers\Homepage\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Homepage 
Route::get('/', [HomeController::class, 'index'])->name('home');

// About page 
Route::get('/About', [AboutController::class, 'index'])->name('about');

// Contact page 
Route::get('/contact', function(){
    return "<h2 class='text-center'>You ate a lot   </h2>";
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
