<div dir="rtl">
    <a href="https://www.eisarapp.sa/" aria-label="Back to homepage">
        <img src="/images/logo.svg" alt="Eisar logo" class="w-32 md:w-48 lg:w-48 max-w-4xl mx-auto mt-8">
    </a>
    <form wire:submit.prevent="submit" novalidate=""
        class=" w-auto lg:w-[30rem] container flex-col py-16 mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        @csrf

        @if ($errors->isNotEmpty())
        <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">أوووه!</strong>
            <span class="block sm:inline">هنالك بعض الأخطاء.</span>
        </div>
        @endif

        <fieldset class="grid grid-cols-1 gap-6 p-6 rounded-md place-items-center shadow-sm bg-gray-100">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="text-xl">سجل دخولك</p>
            </div>
            <div class="w-80 grid grid-cols-1 gap-4 col-span-full lg:col-span-3">
                <x-form.input label="البريد الالكتروني" name="email" />
                <x-form.input label="كلمة المرور" name="password" type="password" />
                <x-form.field>
                    <span class="">ليس لديك حساب؟ <a href="">أنشئ حسابك</a></span>
                    <div class=" flex items-center justify-between text-right">
                        <x-form.button type="submit" color="blue" text="تسجيل الدخول" />
                    </div>
                </x-form.field>
            </div>
        </fieldset>
    </form>
</div>