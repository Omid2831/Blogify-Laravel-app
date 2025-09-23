<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Homepage

Route::get('/',[HomepageController::class, 'index'])->name('homepage');