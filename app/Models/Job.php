<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs-listings';

    protected $fillable = [
        'employer_id',
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
     * Get the employer that owns the job
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * Get all available jobs
     * This will first try to get from database, fallback to static data
     */
    public static function getAllJobs(): array
    {
        // Try to get from database first
        try {
            if (self::count() > 0) {
                return self::with('employer')->get()->map(function ($job) {
                    return [
                        'id' => $job->id,
                        'title' => $job->title,
                        'company' => $job->company,
                        'location' => $job->location,
                        'type' => $job->type,
                        'description' => $job->description,
                        'requirements' => $job->requirements,
                        'apply_link' => $job->apply_link,
                        'employer' => $job->employer ? [
                            'id' => $job->employer->id,
                            'name' => $job->employer->name,
                            'email' => $job->employer->email,
                            'website' => $job->employer->website,
                        ] : null,
                    ];
                })->toArray();
            }
        } catch (\Exception $e) {
            // Database not available, use static data
        }

        // Fallback to static data if database is empty or not available
        return static::getStaticJobs();
    }

    /**
     * Get the job by id
     * This will first try to get from database, fallback to static data
     */
    public static function findJob($id)
    {
        // Try database first
        try {
            $job = parent::with('employer')->find($id);
            if ($job) {
                return $job;
            }
        } catch (\Exception $e) {
            // Database not available
        }

        // Fallback to static data
        $jobData = Arr::first(static::getStaticJobs(), fn($job) => $job['id'] == $id);

        if ($jobData) {
            // Create a temporary model-like object for consistency
            $job = new self();
            foreach ($jobData as $key => $value) {
                $job->$key = $value;
            }
            return $job;
        }

        return null;
    }

    /**
     * Get static jobs data
     */
    private static function getStaticJobs(): array
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

    /**
     * Seed the database with initial static data
     */
    public static function seedStaticData()
    {
        $staticJobs = [
            [
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

        foreach ($staticJobs as $jobData) {
            self::create($jobData);
        }
    }
}
