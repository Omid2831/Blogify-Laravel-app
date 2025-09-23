#### Layout & Blade Templates

I learned how to **create reusable layouts and Blade templates** in Laravel.

1. **Layout (`resources/views/layouts/app.blade.php`)**

   * Defines the overall structure of the site: `<head>`, `<header>`, `<main>`, and `<footer>`.
   * Uses **Tailwind CSS** for styling.
   * Dynamically displays meta data like `title` and `description` using Blade syntax:

     ```blade
     <title>{{ $meta['title'] ?? 'you got an error' }}</title>
     <h2>{{ $meta['description'] ?? 'No description available' }}</h2>
     ```
   * Includes a `@yield('content')` section, allowing each page to insert its specific content while keeping the header and footer consistent.

2. **Homepage view (`resources/views/homepage/index.blade.php`)**

   * Extends the layout using `@extends('layouts.app')`.
   * Displays backend data (`$messages`) dynamically.
   * Handles empty data gracefully with an `@if ... @else` statement:

     ```blade
     @if($messages && count($messages) > 0)
         <ul>
             @foreach($messages as $message)
                 <li>{{ $message }}</li>
             @endforeach
         </ul>
     @else
         <h1>There is nothing on the backend at the moment</h1>
     @endif
     ```

3. **What I learned**

   * How to pass **one-pack data** (meta + messages) from the controller to the Blade view.
   * How Blade extracts array keys as variables, making `$meta` and `$messages` directly usable.
   * How to structure **dynamic content** with reusable layouts for maintainable code.
   * Using conditional statements to handle missing or empty data.

