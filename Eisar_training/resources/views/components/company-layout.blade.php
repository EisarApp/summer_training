@props(['company'])
<x-public-pages-layout>
    <img src="{{ $company->header }}" class="w-full lg:block hidden h-52 absolute top-0 -z-10" alt="Image alt text" />
    <div class="p-0 lg:flex-shrink-0 lg:flex items-center lg:mt-16">
        <div>
            <img src="{{ $company->information->profile_picture }}"
                class="relative rounded-full lg:w-40 lg:h-40 w-24 h-24 mr-4 border-4 border-white "
                alt="Image alt text" />
        </div>
        <div class="mr-4 mt-4">
            <h1 class="font-bold text-xl" style="font-size: 1.6rem">{{ $company->information->name }}</h1>
            <h2 class="mt-2">{{ $company->description }}</h2>
        </div>
    </div>
    <main class="max-w-6xl mx-auto bg-gray-100 border border-gray-200 rounded p-4">
        {{ $slot }}
    </main>

</x-public-pages-layout>
