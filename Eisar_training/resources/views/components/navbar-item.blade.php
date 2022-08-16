@props(['link'])
<a href="{{ $link }}"
    class="{{ request()->route()->uri() == "$link"
        ? 'bg-orange-500 text-white'
        : 'text-orange-200 hover:bg-orange-500 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium mx-4"
    aria-current="page">
    {{ $slot }}
</a>
