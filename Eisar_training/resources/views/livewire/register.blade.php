<div dir="rtl">
    <section class="p-6 dark:text-gray-50">

        <a href="https://www.eisarapp.sa/" aria-label="Back to homepage">
            <img src="/images/logo.svg" alt="Eisar logo" class="w-32 md:w-48 lg:w-48 max-w-4xl mx-auto mt-8">
        </a>
        <fieldset
            class="w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid rounded-md shadow-sm bg-gray-100 mt-16">
            <ul class="grid gap-6 md:grid-cols-3 place-items-center justify-center max-auto mt-4 mb-4 mr-4 ml-4">
                <x-form.user-type
                    class="grid place-items-center p-4 w-full text-white bg-red-500 rounded-lg cursor-pointer peer-checked:text-white hover:text-white hover:bg-red-400box-border h-16 w-48 p-4"
                    id="default-radio-1" value="جهة تعليمية" />
                <x-form.user-type
                    class="grid place-items-center p-4 w-full text-white bg-orange-400 rounded-lg cursor-pointer peer-checked:text-white hover:text-white hover:bg-orange-300 box-border h-16 w-48 p-4"
                    id="default-radio-2" value="طالب" />
                <x-form.user-type
                    class="grid place-items-center p-4 w-full text-white bg-emerald-400 rounded-lg cursor-pointer peer-checked:text-white hover:text-white hover:bg-emerald-300 box-border h-16 w-48 p-4"
                    id="default-radio-3" value="جهة تدريب" />
            </ul>
        </fieldset>

        @if($userType == "طالب")
        <livewire:trainee-register userType=1 />
        @elseif($userType == "جهة تعليمية")
        <livewire:university-register userType=2 />
        @elseif($userType == "جهة تدريب")
        <livewire:company-register userType=3 />
        @endif

    </section>
</div>