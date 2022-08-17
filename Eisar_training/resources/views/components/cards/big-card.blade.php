@props(['header', 'tags', 'buttons'])
<div class="space-y-10 block lg:h-80 h-100 p-4 m-4 bg-white rounded-lg border border-gray-200 shadow-md ">
    <header class="flex items-center">
        {{ $header }}
    </header>
    {{-- tags here --}}
    <div class="flex justify-evenly">
        {{ $tags }}
    </div>
    {{-- additional --}}
    {{ $slot }}
    {{-- buttons here --}}
    <div class="flex items-center">
        {{ $buttons }}
    </div>
</div>