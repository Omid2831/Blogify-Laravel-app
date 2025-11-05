<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/search', [JobController::class, 'search'])->name('jobs.search');
Route::get('/jobs/{id}', [JobController::class, 'show'])->where('id', '[0-9]+')->name('job.show');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.create');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'name' => 'Alessandro Rodriguez',
        'email' => 'alessandro@blogify.com',
        'location' => 'Barcelona, Spain',
        'role' => 'Senior Full Stack Developer',
        'company' => 'Blogify International',
        'bio' => 'Experienced software engineer from Barcelona with over 8 years in web development. Specializes in Laravel, React, and cloud technologies. Fluent in Spanish, English, and Catalan. Passionate about creating scalable solutions and mentoring junior developers.'
    ]);
});
