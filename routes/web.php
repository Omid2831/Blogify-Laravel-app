<?php

use Illuminate\Support\Facades\Route;

// Homepage 
Route::get('/',[])->name('homepage');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
