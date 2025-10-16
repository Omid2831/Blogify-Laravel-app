<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of jobs
     */
    public function index(): View
    {
        $jobs = Job::getAllJobs();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Search for jobs based on query
     */
    public function search(Request $request): JsonResponse
    {
        $query = $request->get('q', '');
        $allJobs = Job::getAllJobs();

        // Filter jobs by title or company name
        $filteredJobs = collect($allJobs)->filter(function ($job) use ($query) {
            if (empty($query)) {
                return true;
            }

            return stripos($job['title'], $query) !== false ||
                stripos($job['company'], $query) !== false;
        })->values()->all();

        // Return job cards HTML for AJAX response
        $html = view('jobs.partials.job-list', compact('filteredJobs'))->render();

        return response()->json([
            'success' => true,
            'html' => $html,
            'count' => count($filteredJobs)
        ]);
    }

    /**
     * Display the specified job
     */
    public function show($id): View
    {
        $job = Job::findJob($id);

        if (!$job) {
            abort(404, 'Job not found');
        }

        return view('jobs.show', compact('job'));
    }
}
