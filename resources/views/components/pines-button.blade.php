@php
    $baseClasses = "inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-100 bg-white border-2 rounded-md";
    $colors = [
        'neutral' => 'text-neutral-900 border-neutral-900 hover:text-white hover:bg-neutral-900',
        'blue' => 'text-blue-600 border-blue-600 hover:text-white hover:bg-blue-600',
        'red' => 'text-red-600 border-red-600 hover:text-white hover:bg-red-600',
        'green' => 'text-green-600 border-green-600 hover:text-white hover:bg-green-600',
        'yellow' => 'text-yellow-600 border-yellow-500 hover:text-white hover:bg-yellow-500',
    ];
    $colorClasses = $colors[$color] ?? $colors['neutral'];
@endphp

<button type="{{ $type }}" class="{{ $baseClasses }} {{ $colorClasses }}">
    {{ $text }}
</button>
