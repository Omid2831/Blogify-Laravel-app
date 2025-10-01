<div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
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
