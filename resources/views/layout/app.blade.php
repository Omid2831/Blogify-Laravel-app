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
    <x-header />

    <!-- Page content -->
    <main class="p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />
</body>

</html>