@props([
    'textColor',
    'bgColor'
])

@php
    $textColor = match($textColor){
        'gray' => 'text-gray-800',
        'blue' => 'text-blue-800',
        'red' => 'text-red-800',
        'green' => 'text-green-800',
        default => 'text-gray-800'
    };

    $bgColor = match($bgColor){
        'gray' => 'bg-gray-300',
        'blue' => 'bg-blue-300',
        'red' => 'bg-red-300',
        'green' => 'bg-green-300',
        default => 'bg-gray-300'
    };
@endphp

<a {{ $attributes }} class="{{ $textColor }} {{ $bgColor }} rounded-xl px-3 py-1 text-base">{{ $slot }}</a>
