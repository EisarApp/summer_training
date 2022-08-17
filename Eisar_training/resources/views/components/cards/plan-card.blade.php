<x-cards.big-card>
    {{-- company name and logo --}}
    <x-slot name="header">

        <h1 class="mr-4 font-semibold" style="font-size: 1.4rem">إيسار لتقنية المعلومات </h1>

    </x-slot>

    <x-slot name="tags">
        <x-tag>عن بعد</x-tag>
        <x-tag>تعاوني</x-tag>
    </x-slot>

    {{-- describtion --}}
    <p>
        نظام سحابي ذكي يتيح للجهات إدارة العملية التدريبية للموظفين وأعضاء الفر...
    </p>

    {{-- buttons --}}
    <x-slot name="buttons">

        <a href="#"
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