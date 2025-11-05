@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('jobs.partials.index.header')
            @include('jobs.partials.searchbar')
            <!-- Jobs Grid -->
            <div id="jobs-container" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @include('jobs.partials.job-list', ['filteredJobs' => $jobs])
            </div>

            @include('jobs.partials.index.call-to-action')
        </div>
    </div>

    @include('jobs.partials.index.job-modal')
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchForm = document.getElementById('job-search-form');
            const searchInput = document.getElementById('job-search');
            const jobsContainer = document.getElementById('jobs-container');
            const searchResultsInfo = document.getElementById('search-results-info');
            const resultsCount = document.getElementById('results-count');
            const spinner = document.getElementById('search-spinner');

            if (!searchForm || !searchInput || !jobsContainer) {
                console.error('Search elements not found');
                return;
            }

            const setLoading = (isLoading) => {
                if (spinner) {
                    spinner.classList.toggle('hidden', !isLoading);
                }
                const submitBtn = searchForm.querySelector('button[type="submit"]');
                if (submitBtn) submitBtn.disabled = isLoading;
            };

            // Submit handler: perform AJAX GET to the server-side search route
            searchForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const q = searchInput.value.trim();
                const url = `${searchForm.action}?q=${encodeURIComponent(q)}`;

                setLoading(true);

                fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        },
                        method: 'GET'
                    })
                    .then((res) => {
                        if (!res.ok) throw new Error('Network response was not ok');
                        return res.json();
                    })
                    .then((data) => {
                        if (data && data.success) {
                            // Replace jobs HTML
                            jobsContainer.innerHTML = data.html;

                            // Update counter
                            if (resultsCount && searchResultsInfo) {
                                resultsCount.textContent = data.count ?? 0;
                                if (q !== '') {
                                    searchResultsInfo.classList.remove('hidden');
                                } else {
                                    searchResultsInfo.classList.add('hidden');
                                }
                            }
                        } else {
                            console.error('Search returned unexpected response', data);
                        }
                    })
                    .catch((err) => {
                        console.error('Search request failed:', err);
                    })
                    .finally(() => setLoading(false));
            });
        });
    </script>
@endpush
