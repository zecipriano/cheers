@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-amber-400 text-sm font-medium leading-5 text-stone-900 dark:text-stone-200 focus:outline-none focus:border-amber-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-stone-500 dark:text-stone-400 hover:text-stone-700 hover:border-stone-300 focus:outline-none focus:text-stone-700 focus:border-stone-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
