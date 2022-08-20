<div>
    <form wire:submit.prevent="submit" novalidate="" action=""
        class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        @csrf

        @if ($errors->isNotEmpty())
        <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">There are some errors with your submission.</span>
        </div>
        @endif

        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">جهة التدريب</p>
                {{-- <p class="text-xs"></p> --}}
            </div>
            <div class="grid grid-cols-4 gap-4 col-span-full lg:col-span-3">

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

            
                <!--  dropdown region and city -->
                <x-form.form-dropdown label="المنطقة" name="region">
                    <option selected disabled>اختر المنطقة</option>
                    @foreach($regions as $region)
                    <option value={{ $region ->id }}>{{ $region ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                <x-form.form-dropdown label="المدينة" name="city">
                    <option selected disabled>اختر المدينة</option>
                    @foreach($cities as $city)
                    <option value={{ $city ->id }}>{{ $city ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                <x-form.field>
                    <x-form.label label="الشعار" name="logo" />
                    <div class="flex">
                        <input type="file" name="logo" id="files"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    @error($logo)
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>

                <x-form.field>
                    <x-form.label label="الترويسة" name="header" />
                    <div class="flex">
                        <input type="file" name="header" id="files" class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    @error($header)
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>

                <x-form.field>
                    <x-form.label label="الوصف" name="description" />
                    <textarea class="border border-gray-200 p-2 w-full rounded" name="description">

                    </textarea>@error($description)
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </x-form.field>

                <x-form.input label="الموقع" name="domain" type="url" />
                <x-form.input label="حجم المنشأة" name="facility_size" type="number" />
                <x-form.field>
                    <div class=" flex items-center justify-between px-4 py-10 text-right sm:px-6">
                        <x-form.button type="submit" color="indigo" text="Submit" />
                    </div>
                </x-form.field>
            </div>


        </fieldset>
    </form>
</div>