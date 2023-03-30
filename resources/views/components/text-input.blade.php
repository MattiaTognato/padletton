@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-white dark:border-white dark:bg-[#111111] dark:text-white focus:border-[#ffff00] dark:focus:border-[#ffff00] focus:ring-[#ffff00] dark:focus:ring-[#ffff00] rounded-md shadow-sm']) !!}>
