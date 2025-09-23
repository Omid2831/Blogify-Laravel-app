<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $meta['title'] ?? 'you got an error' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1"></script>
</head>

<body>
    <h2 class="bold text-center text-5xl mt-5">
        {{ $meta['description'] ?? 'you have nothing fetched' }}
    </h2>
</body>

</html>
