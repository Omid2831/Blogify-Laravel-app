<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return Inertia::render('Home', [
            'pageName' => 'Home'
        ]);
    }
}
