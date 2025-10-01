@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Job Opportunities</h1>
                <p class="text-lg text-gray-600">Join our team and build amazing things together</p>
                <div class="mt-4 flex justify-center">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                        {{ count($jobs) }} Open Positions
                    </span>
                </div>
            </div>

            <!-- Jobs Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($jobs as $job)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                        <!-- Job Header -->
                        <div class="p-6 border-b border-gray-100">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $job['title'] }}</h3>
                                    <p class="text-blue-600 font-medium">{{ $job['company'] }}</p>
                                </div>
                                <div class="ml-4">
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

                            <!-- Location -->
                            <div class="flex items-center text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $job['location'] }}
                            </div>
                        </div>

                        <!-- Job Description -->
                        <div class="p-6">
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ Str::limit($job['description'], 120) }}
                            </p>

                            <!-- Requirements Preview -->
                            <div class="mb-6">
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Key Requirements:</h4>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    @foreach (array_slice($job['requirements'], 0, 2) as $requirement)
                                        <li class="flex items-start">
                                            <svg class="w-3 h-3 mt-1 mr-2 text-green-500 flex-shrink-0" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            {{ Str::limit($requirement, 60) }}
                                        </li>
                                    @endforeach
                                    @if (count($job['requirements']) > 2)
                                        <li class="text-xs text-gray-400 ml-5">
                                            +{{ count($job['requirements']) - 2 }} more requirements
                                        </li>
                                    @endif
                                </ul>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="/jobs/{{ $job['id'] }}"
                                    class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200 text-center">
                                    View Details
                                </a>
                                <a href="{{ $job['apply_link'] }}" target="_blank"
                                    class="flex-1 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors duration-200 text-center">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="mt-12 text-center">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Don't see the perfect role?</h2>
                    <p class="text-gray-600 mb-6">We're always looking for talented individuals to join our team. Send us
                        your resume and let's talk!</p>
                    <a href="/contact"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Job Details Modal -->
    <div id="jobModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <div id="modalContent">
                    <!-- Modal content will be inserted here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function showJobDetails(jobId) {
            const jobs = @json($jobs);
            const job = jobs.find(j => j.id === jobId);

            if (!job) return;

            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = `
        <div class="p-6">
            <!-- Modal Header -->
            <div class="flex items-start justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">${job.title}</h2>
                    <p class="text-blue-600 font-medium text-lg">${job.company}</p>
                    <div class="flex items-center text-gray-500 mt-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        ${job.location} • ${job.type}
                    </div>
                </div>
                <button onclick="closeJobModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Job Description -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Job Description</h3>
                <p class="text-gray-600 leading-relaxed">${job.description}</p>
            </div>
            
            <!-- Requirements -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Requirements</h3>
                <ul class="space-y-2">
                    ${job.requirements.map(req => `
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 mt-1 mr-3 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-gray-600">${req}</span>
                                    </li>
                                `).join('')}
                </ul>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="${job.apply_link}" target="_blank" class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors duration-200 text-center">
                    Apply for this Position
                </a>
                <button onclick="closeJobModal()" class="flex-1 border border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors duration-200">
                    Close
                </button>
            </div>
        </div>
    `;

            document.getElementById('jobModal').classList.remove('hidden');
        }

        function closeJobModal() {
            document.getElementById('jobModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('jobModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeJobModal();
            }
        });
    </script>
@endsection
