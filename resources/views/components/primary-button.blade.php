<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-medic-primary border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-medic-primary-dark active:bg-medic-secondary-dark focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
