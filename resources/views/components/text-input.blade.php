@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-medic-primary focus:ring-medic-primary rounded-md shadow-sm']) }}>
