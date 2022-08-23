<div>
    <form wire:submit.prevent="submit" novalidate=""
        class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        @csrf

        @if ($errors->isNotEmpty())
        <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">أوووه!</strong>
            <span class="block sm:inline">هنالك بعض الأخطاء.</span>
        </div>
        @endif

        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="text-md">الجهة التدريبية</p>
                <p class="text-sm">ادخال بيانات الجهة التدريبية</p>
            </div>
            <div class="grid grid-cols-4 gap-4 col-span-full lg:col-span-3">

                <x-form.input label="اسم الجهة" name="firstName" />
                <x-form.input label="حجم المنشأة" name="facility_size" type="number" />
                <x-form.input label="البريد الالكتروني" name="email" />
                <x-form.input label="الجوال" name="mobile" />
                <x-form.input label="كلمة المرور" name="password" type="password" />
                <x-form.input label="تأكيد كلمة المرور" name="confirmPassword" type="password" />
                <x-form.form-dropdown label="الجنس" name="gender">
                    <option selected>اختر الجنس</option>
                    <option value="f">أنثى</option>
                    <option value="m">ذكر</option>
                </x-form.form-dropdown>
                <x-form.field />


                <!--  dropdown region and city -->
                <x-form.form-dropdown label="المنطقة" name="region">
                    <option selected value="none">اختر المنطقة</option>
                    @foreach($regions as $region)
                    <option value={{ $region ->id }}>{{ $region ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                <x-form.form-dropdown label="المدينة" name="city">
                    <option selected value="none" >اختر المدينة</option>
                    @foreach($cities as $city)
                    <option value={{ $city ->id }}>{{ $city ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                <x-form.field>
                    <x-form.label label="الشعار" name="logo" />
                    <div class="flex">
                        <input type="file" wire:model="logo" id="logo" name="logo"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    @error("logo")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>

                <x-form.field>
                    <x-form.label label="الترويسة" name="header" />
                    <div class="flex">
                        <input type="file" wire:model="header" id="header" name="header"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    @error("header")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>

                <x-form.field>
                    <x-form.label label="الوصف" name="description" />
                    <textarea class="border border-gray-200 p-2 w-full rounded" wire:model="description"
                        name="description">
                    </textarea>
                    @error("description")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>
                <x-form.input label="الموقع" name="domain" type="url" />
                <x-form.field>
                    <div class=" flex items-center justify-between text-right">
                        <x-form.button type="submit" color="blue" text="إنشاء الحساب" />
                    </div>
                </x-form.field>
            </div>
        </fieldset>
    </form>
</div>