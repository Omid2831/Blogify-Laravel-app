<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Homepage

Route::get('homepage.index',[HomepageController::class, 'index'])->name('homepage');