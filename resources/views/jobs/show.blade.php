@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            @include('jobs.partials.show.header')

            <!-- Job Details -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">

                <!-- Content -->
                <div class="p-8">
                    @include('jobs.partials.show.job-details')
                    @include('jobs.partials.show.requirements')
                    @include('jobs.partials.show.apply-section')
                </div>
            </div>
        </div>
    </div>
@endsection
