document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('job-search-form');
    const searchInput = document.getElementById('job-search');
    const jobsContainer = document.getElementById('jobs-container');
    const searchResultsInfo = document.getElementById('search-results-info');
    const resultsCount = document.getElementById('results-count');

    if (!searchForm || !searchInput || !jobsContainer) {
        console.error('Search elements not found');
        return;
    }

    // Function to perform search
    const performSearch = () => {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const jobCards = jobsContainer.querySelectorAll('.job-card');
        let visibleCount = 0;

        // If no search term, show all jobs
        if (searchTerm === '') {
            jobCards.forEach(card => {
                card.style.display = '';
                visibleCount++;
            });
            if (searchResultsInfo) {
                searchResultsInfo.classList.add('hidden');
            }
            return;
        }

        // Filter jobs by title or company
        jobCards.forEach(card => {
            const titleElement = card.querySelector('h3');
            const companyElement = card.querySelector('.text-blue-600');

            if (!titleElement || !companyElement) {
                return;
            }

            const title = titleElement.textContent.toLowerCase();
            const company = companyElement.textContent.toLowerCase();

            if (title.includes(searchTerm) || company.includes(searchTerm)) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update results counter
        if (resultsCount && searchResultsInfo) {
            resultsCount.textContent = visibleCount;
            searchResultsInfo.classList.remove('hidden');
        }
    };

    // Handle form submission
    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        performSearch();
    });

    // Also trigger search on input (real-time search)
    searchInput.addEventListener('input', () => {
        performSearch();
    });
});
