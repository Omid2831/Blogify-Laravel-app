<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta['title'] ?? 'Blogify - Laravel Application' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <x-header />

    <!-- Page content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    @stack('scripts')
</body>

</html>
