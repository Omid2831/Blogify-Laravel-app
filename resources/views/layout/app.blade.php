<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta['title'] ?? 'you got an error' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-gray-800 text-white p-4">
        <h2 class="text-5xl font-bold text-center mt-5">
            {{ $meta['description'] ?? 'No description available' }}
        </h2>
    </header>
    <!-- Page content -->
    <main class="p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="absolute bottom-0 w-full bg-gray-800 text-white p-4 text-center">
        &copy; {{ date('Y') }} My Laravel Site
    </footer>
</body>

</html>