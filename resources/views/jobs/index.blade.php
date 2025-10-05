@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('jobs.partials.index.header')
            @include('jobs.partials.searchbar')
            <!-- Jobs Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($jobs as $job)
                    @include('jobs.partials.index.job-card', ['job' => $job])
                @endforeach
            </div>

            @include('jobs.partials.index.call-to-action')
        </div>
    </div>

    @include('jobs.partials.index.job-modal')
@endsection

@push('scripts')
     @vite('resources/js/javascript.js')
@endpush
