<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    protected $fillable = [
        'title',
        'company',
        'location',
        'type',
        'description',
        'requirements',
        'apply_link'
    ];

    protected $casts = [
        'requirements' => 'array'
    ];

    /**
     * Get all available jobs
     * For now, this returns static data. In the future, this would query a database.
     */
    public static function getAllJobs(): array
    {
        return [
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
        ];
    }


    /*
    Get the job by id
    */
    public static function find(int $id): array|null
    {
        $job = Arr::first(static::getAllJobs(), fn($job) => $job['id'] == $id);
        return $job;
    }
}
