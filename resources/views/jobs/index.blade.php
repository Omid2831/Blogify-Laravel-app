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
    @vite('resources/js/searchabar.js')
@endpush
