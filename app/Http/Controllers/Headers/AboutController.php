<?php

namespace App\Http\Controllers\Headers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    //
    public function about(){
        return Inertia::render('About');
    }
}
