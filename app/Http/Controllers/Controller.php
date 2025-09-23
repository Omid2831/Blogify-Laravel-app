<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

abstract class Controller
{
    // This is where you pass the page name dynamically
    public function index()
    {
        return Inertia::render('Home', [
            'pageName' => ucfirst(request()->route()->getName()),
        ]);
    }
}
