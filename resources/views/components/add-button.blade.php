<button {{
    $attributes->merge([
                'type' => 'button',
                'class' => 'uppercase items-center justify-center px-2 py-1 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:text-sm md:px-3'
                ]) }}>
    {{ $slot }}
</button>
