@props(['route'])

@php
    $classes = Request::routeIs($route) ? 'bg-green-500' : '';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "block p-2 rounded {$classes}"]) }}>
    {{ $slot }}
</a>
