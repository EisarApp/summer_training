<x-public-pages-layout>
    @if (count($companies))
        <div class="max-w-6xl mx-auto flex text-left py-8 px-4">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="lg:inline-flex flex py-2 pl-10 w-full text-right lg:w-48 rounded-md border border-gray-300 bg-white shadow-sm text-sm text-gray-700 hover:bg-gray-50">

                        <svg class="mr-3 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>

                        المجال

                    </button>
                </x-slot>

                <x-dropdown-item href="/">
                    الكل
                </x-dropdown-item>
                @foreach ($companies as $company)
                    <x-dropdown-item
                        href="/?domain={{ $company->domain }}&{{ http_build_query(request()->except('city', 'page')) }}">
                        {{ $company->domain }}
                    </x-dropdown-item>
                @endforeach

            </x-dropdown>
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="lg:inline-flex flex py-2 pl-10 w-full text-right lg:w-48 rounded-md border border-gray-300 bg-white shadow-sm text-sm text-gray-700 hover:bg-gray-50">

                        <svg class="mr-3 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>

                        المدينة

                    </button>
                </x-slot>

                <x-dropdown-item href="/">
                    الكل
                </x-dropdown-item>
                @foreach ($cities as $city)
                    <x-dropdown-item
                        href="/?city={{ $city->name }}&{{ http_build_query(request()->except('city', 'page')) }}">
                        {{ $city->name }}
                    </x-dropdown-item>
                @endforeach

            </x-dropdown>
        </div>

        <main class="max-w-6xl mx-auto bg-gray-100 border border-gray-200 rounded p-4">
            <div class="lg:grid lg:grid-cols-3">
                @foreach ($companies as $company)
                    <x-cards.big-card>
                        {{-- company name and logo --}}
                        <x-slot name="header">
                            <div>
                                <img class="h-8 w-20" src="\storage\images\eisar-logo.svg" alt="company logo">
                            </div>

                            <h1 class="mr-4 font-semibold" style="font-size: 1rem">{{ $company->information->name }}
                            </h1>

                        </x-slot>

                        <x-slot name="tags">
                            <x-tag>{{ $company->domain }}</x-tag>
                            <x-tag>{{ $company->city->name }}</x-tag>
                        </x-slot>

                        {{-- describtion --}}
                        <p>
                            {{ $company->description }}
                        </p>

                        {{-- buttons --}}
                        <x-slot name="buttons">

                            <a href="/companies/{{ $company->id }}"
                                class="inline-flex items-center py-2 p-6 m-2 text-sm font-medium text-center text-white rounded-lg hover:bg-blue-200 bg-gradient-to-r from-blue-200 to-blue-500">
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
            {!! $companies->links() !!}
        </main>
    @else
        <main class=" max-w-6xl mx-auto bg-gray-100 border border-gray-200 rounded p-4 h-44">
            <p class="text-center pt-12 font-bold">لا يوجد فرص لعرضها حاليًا، زرنا في وقت لاحق.</p>
        </main>
    @endif

</x-public-pages-layout>
