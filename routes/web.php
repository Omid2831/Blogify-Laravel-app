<?php

use App\Http\Controllers\HomepageController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// Jobs
Route::get('/jobs', function () {
    $jobs = Job::getAllJobs();
    return view('jobs.index', [
        'title' => 'Jobs - Blogify',
        'jobs' => $jobs
    ]);
})->name('jobs');

// About
// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Contact
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us - Blogify',
        'name' => 'Sarah Johnson',
        'email' => 'sarah.johnson@blogify.com',
        'bio' => 'Passionate full-stack developer and technical writer with over 8 years of experience in web development. Specializing in Laravel, React, and modern JavaScript frameworks. I love creating clean, efficient code and helping others learn programming through my blog posts and tutorials. When I\'m not coding, you\'ll find me hiking, reading tech books, or experimenting with new technologies.',
        'location' => 'San Francisco, CA',
        'role' => 'Senior Full-Stack Developer',
        'company' => 'Blogify Technologies'
    ]);
})->name('contact');
