document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('job-search-form');
    const searchInput = document.getElementById('job-search');
    const jobsContainer = document.getElementById('jobs-container');
    const searchResultsInfo = document.getElementById('search-results-info');
    const resultsCount = document.getElementById('results-count');

    if (!searchForm || !searchInput || !jobsContainer) {
        return;
    }

    // Handle form submission
    searchForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Prevent page reload

        const searchTerm = searchInput.value.toLowerCase().trim();
        const jobCards = jobsContainer.querySelectorAll('.job-card');
        let visibleCount = 0;

        // Searching for the card 
        jobCards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const company = card.querySelector('.text-blue-600').textContent.toLowerCase();

            if (searchTerm === '' || title.includes(searchTerm) || company.includes(searchTerm)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update results counter
        if (resultsCount && searchResultsInfo) {
            resultsCount.textContent = visibleCount;
            if (searchTerm !== '') {
                searchResultsInfo.classList.remove('hidden');
            } else {
                searchResultsInfo.classList.add('hidden');
            }
        }
    });

    // Also allow Enter key to submit
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            searchForm.dispatchEvent(new Event('submit'));
        }
    });
});
