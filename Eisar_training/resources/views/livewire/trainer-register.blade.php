<div>
    <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">
        <div class="space-y-2 col-span-full lg:col-span-1">
            <p class="font-medium">{{ $pages[$currentPage]['heading'] }}</p>
            <p class="text-xs">{{ $pages[$currentPage]['subheading'] }}</p>
        </div>
        <div class="grid grid-cols-4 gap-4 col-span-full lg:col-span-3">
            {{-- failed message --}}
            @if ($errors->isNotEmpty())
            <x-form.formMessage color="red" state="oops"
                message="There are some errors with your submission." />
            @endif
            {{-- success message --}}
            @if ($success)
            <x-form.formMessage color="green" state="success" />
            @endif
            {{-- --}}

            {{-- fields 1 --}}
            @if ($currentPage === 1)
            <x-form.input label="الاسم الأول" name="firstName" />
            <x-form.input label="الاسم الأخير" name="lastName" />
            <x-form.input label="البريد الالكتروني" name="email" />
            <x-form.input label="الجوال" name="mobile" />
            <x-form.input label="كلمة المرور" name="password" type="password" />
            <x-form.input label="تأكيد كلمة المرور" name="confirmPassword" type="password" />

            {{-- trainer type --}}
            <div class="flex py-3 ">
                <x-form.radio value="طالب" class="px-2" />
                <x-form.radio value="خريج" class="px-4" />
            </div>

            @if($type == "طالب")
            <x-form.field />

            <!--  dropdown region and city -->
            <x-form.form-dropdown label="المنطقة" name="region">
                <option selected disabled>اختر المنطقة</option>
                @foreach($regions as $region)
                <option value={{ $region ->id }}>{{ $region ->name }}</option>
                @endforeach
            </x-form.form-dropdown>

            @if(count($cities) > 0)
            <x-form.form-dropdown label="المدينة" name="city">
                <option selected disabled>اختر المدينة</option>
                @foreach($cities as $city)
                <option value={{ $city ->id }}>{{ $city ->name }}</option>
                @endforeach
            </x-form.form-dropdown>
            @else
            <x-form.field />
            @endif

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


            <x-form.input label="التخصص" name="major" />
            <x-form.input label="الرقم الجامعي" name="studentNumber" />
            <x-form.input label="سنة التخرج" name="trainingHours" />
            <x-form.field />

            <x-form.input label="المعدل" name="studentNumber" />
            <x-form.input label="ساعات التدريب" name="trainingHours" />
            <x-form.date label="تاريخ التدريب" name="trainingDate" />

            <x-form.field>
                <x-form.label label="خطاب التدريب" name="trainingLetter" />
                <div class="flex">
                    <input type="file" name="trainingLetter" id="files"
                        class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                </div>
            </x-form.field>

            <x-form.field>
                <x-form.label label="السجل الاأكاديمي" name="academic_transaction" />
                <div class="flex">
                    <input type="file" name="academic_transaction" id="files"
                        class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                </div>
            </x-form.field>

            <x-form.field>
                <x-form.label label="السيرة الذاتية" name="cv" />
                <div class="flex">
                    <input type="file" name="cv" id="files"
                        class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                </div>
            </x-form.field>

            @elseif($type == "خريج")

            @endif

            {{-- fields 2 --}}
            @elseif ($currentPage === 2)

            @endif


            <div class=" flex items-center justify-between px-4 py-10 text-right sm:px-6">
                @if ($currentPage === 1)
                <div></div>
                @else
                <x-form.button type="button" color="gray" text="Back" functionName="goToPreviousPage" />
                @endif
                @if ($currentPage === count($pages))
                <x-form.button type="submit" color="indigo" text="Submit" />
                @else
                <x-form.button type="button" color="indigo" text="Next" functionName="goToNextPage" />
                @endif
            </div>
        </div>

    </fieldset>
</div>
