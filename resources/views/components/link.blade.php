<div>
    <a {{ $attributes->merge(['class' =>'flex justify-center text-white rounded px-1.5 text-xs
    py-2
    font-medium
       hover:bg-opacity-90
       dark:border-strokedark dark:text-white xl:text-sm xl:px-6 xl:py-2']) }}>
        {{ $slot }}
    </a>
</div>