<!-- Requirements -->
<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Requirements</h2>
    <ul class="space-y-3">
        @foreach ($job['requirements'] as $requirement)
            <li class="flex items-start">
                <svg class="w-5 h-5 mt-0.5 mr-3 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-700">{{ $requirement }}</span>
            </li>
        @endforeach
    </ul>
</div>
