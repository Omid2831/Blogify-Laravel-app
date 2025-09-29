<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// Jobs
Route::get('/jobs', function () {
    return view('jobs', [
        'title' => 'Jobs - Blogify',
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Frontend Developer',
                'company' => 'Tech Solutions Inc.',
                'location' => 'New York, NY',
                'type' => 'Full-time',
                'description' => 'We are looking for a skilled Frontend Developer to join our team. You will be responsible for implementing visual elements that users see and interact with in a web application.',
                'requirements' => [
                    'Proven experience as a Frontend Developer',
                    'Proficiency in HTML, CSS, JavaScript, and frameworks like React or Vue.js',
                    'Experience with responsive and adaptive design',
                    'Familiarity with version control systems like Git'
                ],
                'apply_link' => 'https://techsolutions.com/careers/frontend-developer'
            ],
            [
                'id' => 2,
                'title' => 'Backend Developer',
                'company' => 'Innovatech Corp.',
                'location' => 'San Francisco, CA',
                'type' => 'Full-time',
                'description' => 'We are seeking a Backend Developer to build and maintain the server-side logic, database management, and ensure high performance and responsiveness to requests from the frontend.',
                'requirements' => [
                    'Proven experience as a Backend Developer',
                    'Proficiency in server-side languages such as Python, Ruby, Java, PHP, or Node.js',
                    'Experience with database management systems like MySQL, PostgreSQL, or MongoDB',
                    'Familiarity with RESTful API design and development'
                ],
                'apply_link' => 'https://innovatech.com/jobs/backend-developer'
            ],
            [
                'id' => 3,
                'title' => 'Full Stack Developer',
                'company' => 'WebWorks LLC',
                'location' => 'Remote',
                'type' => 'Contract',
                'description' => 'We are looking for a versatile Full Stack Developer who can work on both the frontend and backend of our web applications. You will be involved in all stages of development, from concept to deployment.',
                'requirements' => [
                    'Proven experience as a Full Stack Developer',
                    'Proficiency in frontend technologies (HTML, CSS, JavaScript) and backend technologies (Node.js, Python, Ruby, etc.)',
                    'Experience with databases and server management',
                    'Ability to work independently and in a team environment'
                ],
                'apply_link' => 'https://webworks.com/careers/full-stack-developer'
            ]
        ]
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
