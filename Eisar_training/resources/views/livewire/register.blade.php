<div dir="rtl">
    <section class="p-6 dark:text-gray-50">

        <a href="https://www.eisarapp.sa/" aria-label="Back to homepage">
            <img src="/images/logo.svg" alt="Eisar logo" class="w-32 md:w-48 lg:w-48 max-w-4xl mx-auto mt-8">
        </a>
        {{-- user type --}}
        <div class="flex py-3 ">
            <x-form.user-type value="جهة تعليمية" class="px-2" />
            <x-form.user-type value="طالب" class="px-4" />
            <x-form.user-type value="جهة تدريب" class="px-4" />

        </div>

        @if($userType == "طالب")
        <livewire:trainee-register />
        @elseif($userType == "جهة تعليمية")
        <livewire:university-register />
        @elseif($userType == "جهة تدريب")
        <livewire:company-register />
        @endif

    </section>
</div>