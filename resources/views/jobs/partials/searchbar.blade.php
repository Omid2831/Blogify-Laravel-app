<div class="max-w-2xl mx-auto mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form id="job-search-form">
            <div class="relative rounded-xl">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                
                <button type="submit"
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                    Search
                </button>
                <input type="search" id="job-search"
                    class="block w-full pl-12 pr-32 py-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                    placeholder="Search jobs by title or company..." autocomplete="on" />
            </div>
        </form>

        <!-- Search Results Counter -->
        <div id="search-results-info" class="hidden mt-3 text-sm text-gray-600">
            <span id="results-count">0</span> job(s) found
        </div>
    </div>
</div>
