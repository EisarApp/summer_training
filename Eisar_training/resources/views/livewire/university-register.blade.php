<div>
    
    <form wire:submit.prevent="submit" novalidate="" action=""
        class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        @csrf
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">

            
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">الجهة التعليمية</p>
                <p class="text-xs">ادخال بيانات الجهة التعليمية</p>
            </div>
            <div class="grid grid-cols-4 gap-4 col-span-full lg:col-span-3">
                {{-- fields 1 --}}
                <x-form.input label="الاسم الأول" name="firstName" />
                <x-form.input label="الاسم الأخير" name="lastName" />
                <x-form.input label="البريد الالكتروني" name="email" />
                <x-form.input label="الجوال" name="mobile" />
                <x-form.input label="كلمة المرور" name="password" type="password" />
                <x-form.input label="تأكيد كلمة المرور" name="confirmPassword" type="password" />

                <x-form.form-dropdown label="الجنس" name="gender">
                    <option selected disabled>اختر الجنس</option>
                    <option value="f">أنثى</option>
                    <option value="m">ذكر</option>
                </x-form.form-dropdown>
                <x-form.field />

                <!--  dropdown university and department -->
                <x-form.form-dropdown label="الجامعة" name="university">
                    <option selected disabled>اختر الجامعة</option>
                    @foreach($universities as $university)
                    <option value={{ $university ->id }}>{{ $university ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                @if(count($departments) > 0)
                <x-form.form-dropdown label="الكلية" name="department">
                    <option selected disabled>اختر الكلية</option>
                    @foreach($departments as $department)
                    <option value={{ $department ->id }}>{{ $department ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>
                @else
                <x-form.field />
                @endif

                <div class="flex items-center justify-between px-4 py-10 text-right sm:px-6">
                    <x-form.button type="submit" color="indigo" text="Submit" />
                </div>
            </div>

        </fieldset>
    </form>
</div>