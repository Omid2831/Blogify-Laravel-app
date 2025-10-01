@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Back Button -->
            <div class="mb-6">
                <a href="/jobs" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Jobs
                </a>
            </div>

            <!-- Job Details -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="p-8 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between">
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $job['title'] }}</h1>
                            <p class="text-xl text-blue-600 font-semibold mb-4">{{ $job['company'] }}</p>

                            <div class="flex flex-wrap gap-4 text-sm text-gray-600">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $job['location'] }}
                                </div>
                                <div class="flex items-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        {{ $job['type'] === 'Full-time'
                                            ? 'bg-green-100 text-green-800'
                                            : ($job['type'] === 'Contract'
                                                ? 'bg-yellow-100 text-yellow-800'
                                                : 'bg-purple-100 text-purple-800') }}">
                                        {{ $job['type'] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 md:mt-0 md:ml-6">
                            <a href="{{ $job['apply_link'] }}" target="_blank"
                                class="w-full md:w-auto inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Job Description</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $job['description'] }}</p>
                    </div>

                    <!-- Requirements -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Requirements</h2>
                        <ul class="space-y-3">
                            @foreach ($job['requirements'] as $requirement)
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 mt-0.5 mr-3 text-green-500 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $requirement }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Apply Section -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Ready to Apply?</h3>
                        <p class="text-gray-600 mb-4">
                            Join our team at {{ $job['company'] }} and take the next step in your career.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="{{ $job['apply_link'] }}" target="_blank"
                                class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg text-center font-medium hover:bg-blue-700 transition-colors duration-200">
                                Apply for this Position
                            </a>
                            <a href="/jobs"
                                class="flex-1 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-center font-medium hover:bg-gray-50 transition-colors duration-200">
                                View More Jobs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
