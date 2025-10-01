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


### Using Blade Components for Layout

I learned how to **create reusable Blade components** in Laravel to make layouts cleaner and easier to maintain.

1. **Header and Footer Components**

   * Created `Header` and `Footer` components using:

     ```bash
     php artisan make:component Header
     php artisan make:component Footer
     ```
   * Moved the header and footer HTML from the layout into these components.
   * Example usage in a layout:

     ```blade
     <x-header />
     <main>@yield('content')</main>
     <x-footer />
     ```

2. **Benefits**

   * **Reusability**: Can include the same header/footer in multiple layouts or pages.
   * **Maintainability**: Update in one place, changes reflect everywhere.
   * **Cleaner layouts**: Layout files now focus only on page structure and `@yield` content.

3. **Key Learning**

   * How to **modularize Blade templates**.
   * How Laravel automatically makes component data and views easy to use.
   * Understanding the **separation of concerns** in MVC more clearly.

> **Note:**
><br> All page-specific meta data is passed as a single array from the controller, making it easy to access `$meta` and `$messages` in any Blade template.

### Reusable Navbar with Blade Components

I learned how to manage the navbar using **Blade components** in Laravel. By creating a component, I can **reuse the navbar anywhere in the project** without duplicating code. This makes my codebase cleaner, more maintainable, and scalable.

For example, in the component, you can define the HTML like this:

```blade
<a {{ $attributes }}>{{ $slot }}</a>
```

* **`$slot`**: Represents the content you pass into the component.
* **`$attributes`**: Allows you to pass additional HTML attributes dynamically, such as `class`, `href`, `id`, etc.

This approach makes it easy to create a consistent navbar throughout the application while keeping it flexible and customizable.


