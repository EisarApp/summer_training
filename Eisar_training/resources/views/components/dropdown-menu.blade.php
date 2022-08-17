<x-dropdown>
    <x-slot name="trigger">
        <button
            class="lg:inline-flex flex py-2 pl-10 w-full text-right lg:w-48 rounded-md border border-gray-300 bg-white shadow-sm text-sm text-gray-700 hover:bg-gray-50">

            <svg class="mr-3 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>

            خيارات

        </button>
    </x-slot>

    <x-dropdown-item href="#">
        <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-100" role="menuitem" tabindex="-1"
            id="user-menu-item-0">خيار 1</a>
    </x-dropdown-item>
    <x-dropdown-item href="#">
        <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-100" role="menuitem" tabindex="-1"
            id="user-menu-item-0">خيار 1</a>
    </x-dropdown-item>
    <x-dropdown-item href="#">
        <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-100" role="menuitem" tabindex="-1"
            id="user-menu-item-0">خيار 1</a>
    </x-dropdown-item>

</x-dropdown>
