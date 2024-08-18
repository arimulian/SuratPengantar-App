<div>
    <button {{ $attributes->merge() }}
       class="flex justify-center text-white bg-primary rounded px-1.5 py-2 text-sm font-medium
       hover:bg-opacity-90
       dark:border-strokedark dark:text-white xl:px-6 xl:py-2"
    >
        {{ $slot }}
    </button>
</div>