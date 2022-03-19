@aware(['error'])

@props(['name', 'error'=> null])

<input
    x-bind:id="$id('input')"
    {{$attributes->class([
            'h-12 w-full border  px-5 rounded-lg focus:border-2 focus:border-secondary-500 focus:outline-none',
            'border-primary-500' => !$error,
            'border-red-500' => $error,
    ])}}
    name="{{ $name }}"
    value="{{ old($name) ?? $slot }}">

