<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/jobs', function () {
    // Get jobs from database (will fallback to static if database is empty)
    $jobs = Job::getAllJobs();
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    // Get single job from database
    $job = Job::findJob($id);

    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('jobs.show', ['job' => $job]);
})->where('id', '[0-9]+')->name('job.show');

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
