@extends('layout.app')

@section('content')
    <div class="bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h1>
                <p class="text-lg text-gray-600">Get in touch with our team</p>
            </div>

            <!-- Contact Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white">Contact Information</h2>
                    <p class="text-blue-100 mt-2">We'd love to hear from you</p>
                </div>

                <!-- Card Body -->
                <div class="p-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Left Column - Contact Details -->
                        <div class="space-y-6">
                            <!-- Name & Role -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Name</h3>
                                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $name }}</p>
                                    <p class="text-sm text-blue-600 font-medium">{{ $role ?? 'Team Member' }}</p>
                                    <p class="text-xs text-gray-500">{{ $company ?? 'Blogify' }}</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Email</h3>
                                    <a href="mailto:{{ $email }}"
                                        class="mt-1 text-lg font-semibold text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                        {{ $email }}
                                    </a>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Location</h3>
                                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column - Bio -->
                        <div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">About</h3>
                                    <p class="mt-3 text-gray-700 leading-relaxed">{{ $bio }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="mailto:{{ $email }}"
                                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Send Email
                            </a>
                            <button
                                class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                Start Chat
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Card -->
            <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Need immediate assistance?</h3>
                    <p class="text-gray-600 mb-4">Our team is available 24/7 to help you with any questions or concerns.</p>
                    <div class="flex justify-center space-x-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600">24/7</div>
                            <div class="text-sm text-gray-500">Support</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600">&lt;1hr</div>
                            <div class="text-sm text-gray-500">Response</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600">100%</div>
                            <div class="text-sm text-gray-500">Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
