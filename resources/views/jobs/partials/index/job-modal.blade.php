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
