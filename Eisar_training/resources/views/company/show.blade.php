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
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($company->plans as $plan)
                <x-cards.big-card>
                    {{-- company name and logo --}}
                    <x-slot name="header">

                        <h1 class="mr-4 font-semibold" style="font-size: 1.4rem">{{ $plan->name }}</h1>

                    </x-slot>

                    <x-slot name="tags">
                        <x-tag>{{ $plan->training_method }}</x-tag>
                        <x-tag>{{ $plan->training_type }}</x-tag>
                    </x-slot>

                    {{-- describtion --}}
                    <p>
                        {{ substr($plan->description, 0, 60) . '...' }}
                    </p>

                    {{-- buttons --}}
                    <x-slot name="buttons">

                        <a href="/plans/{{ $plan->id }}"
                            class="inline-flex items-center py-2 p-6 m-2 text-sm font-medium text-center text-white rounded-lg hover:bg-blue-500 bg-gradient-to-r from-blue-200 to-blue-500">
                            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            المزيد
                        </a>

                    </x-slot>
                </x-cards.big-card>
            @endforeach
        </div>
    </main>
</x-public-pages-layout>
