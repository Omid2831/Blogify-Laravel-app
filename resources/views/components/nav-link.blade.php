@props(['active' => false, 'type' => 'a'])

@php
    if ($type === 'a') {
        $classes = $active ?? false ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    } else {
        $classes = $active ?? false ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
    }
@endphp

@if ($type === 'a')
    <a class="{{ $classes }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ $classes }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
