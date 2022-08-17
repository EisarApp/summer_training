<div dir="rtl">
    <section class="p-6 dark:text-gray-50">
        <form wire:submit.prevent="submit" novalidate="" action=""
            class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
            <a href="https://www.eisarapp.sa/" aria-label="Back to homepage">
                <img src="/images/logo.svg" alt="Eisar logo" class="w-32 md:w-48 lg:w-48 max-w-4xl mx-auto mt-8">
            </a>
            {{-- user type --}}
            <div class="flex py-3 ">
                <x-form.radio value="جهة تعليمية" class="px-2" />
                <x-form.radio value="طالب" class="px-4" />
                <x-form.radio value="جهة تدريب" class="px-4" />

            </div>

            @if($type == "طالب")
            <livewire:trainer-register />
            @elseif($type == "جهة تعليمية")
            <livewire:university-register />
            @elseif($type == "جهة تدريب")
            <livewire:institute-register />
            @endif


        </form>
    </section>
</div>