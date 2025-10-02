<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTitles = [
            'Senior Software Engineer',
            'Full Stack Developer',
            'Frontend Developer',
            'Backend Developer',
            'DevOps Engineer',
            'Data Scientist',
            'Product Manager',
            'UX/UI Designer',
            'Mobile Developer',
            'System Administrator',
            'Database Administrator',
            'Quality Assurance Engineer',
            'Technical Lead',
            'Solutions Architect',
            'Cybersecurity Specialist'
        ];

        $companies = [
            'Tech Solutions Inc.',
            'Innovation Labs',
            'Digital Dynamics',
            'CodeCraft Studios',
            'NextGen Systems',
            'CloudFirst Technologies',
            'DataDriven Corp',
            'WebWorks Agency',
            'StartupHub',
            'Enterprise Solutions Ltd',
            'TechPioneer Inc',
            'FutureTech Group',
            'AgileWorks',
            'DevMaster Solutions',
            'DigitalForge'
        ];

        $locations = [
            'New York, NY',
            'San Francisco, CA',
            'Austin, TX',
            'Seattle, WA',
            'Remote',
            'Boston, MA',
            'Chicago, IL',
            'Los Angeles, CA',
            'Denver, CO',
            'Miami, FL',
            'Atlanta, GA',
            'Portland, OR',
            'Remote (US)',
            'Hybrid - NYC',
            'London, UK'
        ];

        $jobTypes = ['Full-time', 'Part-time', 'Contract'];

        $requirements = [
            'Bachelor\'s degree in Computer Science or related field',
            '3+ years of professional software development experience',
            'Proficiency in JavaScript, HTML, and CSS',
            'Experience with React, Vue.js, or Angular',
            'Knowledge of Node.js and Express.js',
            'Familiarity with SQL and NoSQL databases',
            'Experience with Git version control',
            'Strong problem-solving and analytical skills',
            'Excellent communication and teamwork abilities',
            'Experience with cloud platforms (AWS, Azure, GCP)',
            'Knowledge of RESTful APIs and microservices',
            'Understanding of Agile development methodologies',
            'Experience with testing frameworks and TDD',
            'Familiarity with CI/CD pipelines',
            'Knowledge of Docker and containerization'
        ];

        // Select 3-6 random requirements
        $selectedRequirements = fake()->randomElements($requirements, fake()->numberBetween(3, 6));

        return [
            'title' => fake()->randomElement($jobTitles),
            'company' => fake()->randomElement($companies),
            'location' => fake()->randomElement($locations),
            'type' => fake()->randomElement($jobTypes),
            'description' => fake()->paragraphs(3, true),
            'requirements' => $selectedRequirements,
            'apply_link' => fake()->url(),
        ];
    }

    /**
     * Create a senior-level job.
     */
    public function senior(): static
    {
        return $this->state(fn (array $attributes) => [
            'title' => 'Senior ' . $attributes['title'],
        ]);
    }

    /**
     * Create a remote job.
     */
    public function remote(): static
    {
        return $this->state(fn (array $attributes) => [
            'location' => 'Remote',
        ]);
    }

    /**
     * Create a full-time job.
     */
    public function fullTime(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'Full-time',
        ]);
    }
}