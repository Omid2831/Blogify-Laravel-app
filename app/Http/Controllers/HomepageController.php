<?php

namespace App\Http\Controllers;

use App\Models\HomepageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
           
            
             // Combine all page data into a single array
            $data = [
                'meta' => [
                    'title'       => 'Homepage',
                    'description' => 'Welcome to the homepage!',
                ],
                'messages' => null,
            ];

            // Return the homepage view with merged data
            return view('/homepage', $data);
        } catch (\Exception $e) {
            // Log the error (important for debugging)
            Log::error('Error loading homepage: ' . $e->getMessage());

            // Option 1: Show a custom error page 'errors.custom'
            return response()->view('/homepage', [
                'message' => 'Something went wrong while loading the homepage.'
            ], 500);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomepageModel $homepageModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomepageModel $homepageModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomepageModel $homepageModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomepageModel $homepageModel)
    {
        //
    }
}
