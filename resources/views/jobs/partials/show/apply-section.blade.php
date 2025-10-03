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
