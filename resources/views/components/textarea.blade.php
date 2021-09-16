@props(['disabled' => false])

<textarea
    rows="3" {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
    'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md'
    ]) !!}>
</textarea>
