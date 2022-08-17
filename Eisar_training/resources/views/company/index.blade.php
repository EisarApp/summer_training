<x-public-pages-layout>
    <div class="max-w-6xl mx-auto flex text-left py-8 px-4">
        <x-dropdown-menu />
        <x-dropdown-menu />
    </div>
    <main class="max-w-6xl mx-auto bg-gray-100 border border-gray-200 rounded p-4">
        <div class="lg:grid lg:grid-cols-3">
            <x-cards.company-card />
            <x-cards.company-card />
            <x-cards.company-card />
            <x-cards.company-card />
            <x-cards.company-card />
            <x-cards.company-card />
        </div>
    </main>
</x-public-pages-layout>