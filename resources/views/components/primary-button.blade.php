<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white dark:bg-white border border-transparent rounded-md font-semibold text-xs text-white dark:text-black uppercase tracking-widest hover:bg-[#ffff00] dark:hover:bg-[#ffff00] focus:bg-[#ffff00] dark:focus:bg-[#ffff00] active:bg-[#ffcc00] dark:active:bg-[#ffcc00] focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 dark:focus:ring-offset-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
