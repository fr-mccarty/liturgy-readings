<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'text-cool-gray-600 hover:text-cool-gray-900 text-sm leading-5 font-bold focus:outline-none focus:text-cool-gray-800 focus:underline transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
    ]) }}
>
    {{ $slot }}
</button>
