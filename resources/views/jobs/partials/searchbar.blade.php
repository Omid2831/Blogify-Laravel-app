<div class="max-w-2xl mx-auto mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6">
        {{-- Use GET action so the form works without JS as a fallback --}}
        <form id="job-search-form" action="{{ route('jobs.search') }}" method="get" class="relative">
            <div class="relative rounded-xl">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <input name="q" type="search" id="job-search"
                    class="block w-full pl-12 pr-36 py-3 text-sm text-gray-900 border border-gray-200 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-150"
                    placeholder="Search jobs by title or company..." autocomplete="off" />

                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 flex items-center gap-2">
                    <button type="submit"
                        class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-md transition-colors duration-150">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" />
                        </svg>
                        Search
                    </button>

                    {{-- Spinner shown during AJAX request --}}
                    <div id="search-spinner" class="hidden w-5 h-5 animate-spin text-blue-600" aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </form>

        {{-- Search Results Counter / Badge --}}
        <div id="search-results-info" class="hidden mt-4 text-sm text-gray-700">
            <div class="flex items-center gap-3">
                <span
                    class="inline-flex items-center justify-center bg-blue-100 text-blue-800 rounded-full px-3 py-1 text-xs font-semibold"
                    id="results-count">0</span>
                <span class="text-sm">job(s) found</span>
            </div>
        </div>
    </div>
</div>
