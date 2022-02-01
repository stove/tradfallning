@props(['route'])
@php

    $classes = \Illuminate\Support\Facades\Request::routeIs($route) ? 'text-green-300' : 'text-gray-200';

    @endphp
<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "py-4 px-4 hover:underline " . $classes]) }} >
    {{ $slot }}
</a>
