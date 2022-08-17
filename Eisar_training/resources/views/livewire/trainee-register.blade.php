<div>
    <form wire:submit.prevent="submit" novalidate="" action=""
        class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">المعلومات الشخصية</p>
                <p class="text-xs">أدخل المعلومات الشخصية للبدء.</p>
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

                @if(! $traineeType)
                <div class="flex py-3 ">
                    <x-form.trainee-type value="طالب" class="px-2" />
                    <x-form.trainee-type value="خريج" class="px-4" />
                </div>
                @endif

                @if($traineeType == "طالب")

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
                <x-form.form-dropdown label="نوع المعدل" name="gpa_type">
                    <option selected disabled>اختر نوع المعدل</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </x-form.form-dropdown>
                <x-form.input label="المعدل" name="studentNumber" />
                <x-form.input label="ساعات التدريب" name="trainingHours" />
                <x-form.form-dropdown label="فترة التدريب" name="training_date">
                    <option selected disabled>اختر فترة التدريب</option>
                    <option value="firstsemester">Firstsemester</option>
                    <option value="secondsemester">Secondsemester</option>
                    <option value="thirdsemester">Thirdsemester</option>
                </x-form.form-dropdown>


                <x-form.field>
                    <x-form.label label="خطاب التدريب" name="trainingLetter" />
                    <div class="flex">
                        <input type="file" name="trainingLetter" id="files"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label label="السجل الأكاديمي" name="academic_transaction" />
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
                <x-form.field />

                <x-form.field>
                    <div class=" flex items-center justify-between px-4 py-10 text-right sm:px-6">
                        <x-form.button type="submit" color="indigo" text="Submit" />
                    </div>
                </x-form.field>

                @elseif($traineeType == "خريج")

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
                <x-form.field />
                <x-form.form-dropdown label="نوع المعدل" name="gpa_type">
                    <option selected disabled>اختر نوع المعدل</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </x-form.form-dropdown>
                <x-form.input label="المعدل" name="studentNumber" />
                <x-form.input label="ساعات التدريب" name="trainingHours" />
                <x-form.form-dropdown label="فترة التدريب" name="training_date">
                    <option selected disabled>اختر فترة التدريب</option>
                    <option value="firstsemester">Firstsemester</option>
                    <option value="secondsemester">Secondsemester</option>
                    <option value="thirdsemester">Thirdsemester</option>
                </x-form.form-dropdown>
                <x-form.form-dropdown label="الدرجة العلمية" name="academic_degree">
                    <option selected disabled>الدرجة العلمية</option>
                    <option value="bachelor">بكالوريوس</option>
                    <option value="diploma">دبلوم</option>
                </x-form.form-dropdown>

                <x-form.field>
                    <x-form.label label="وثيقة التخرج" name="graduation_certificate" />
                    <div class="flex">
                        <input type="file" name="graduation_certificate" id="files"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                </x-form.field>

                <x-form.field>
                    <x-form.label label="السجل الأكاديمي" name="academic_transaction" />
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
                <x-form.field />

                <x-form.field>
                    <div class=" flex items-center justify-between px-4 py-10 text-right sm:px-6">
                        <x-form.button type="submit" color="indigo" text="Submit" />
                    </div>
                </x-form.field>

                @endif
            </div>
        </fieldset>
    </form>
</div>