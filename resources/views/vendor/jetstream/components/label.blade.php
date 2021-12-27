@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-stone-700 dark:text-stone-400']) }}>
    {{ $value ?? $slot }}
</label>
