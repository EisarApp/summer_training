<div>
    <form wire:submit.prevent="submit" novalidate=""
        class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        @csrf

        {{-- @if ($errors->isNotEmpty())
        <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">أوووه!</strong>
            <span class="block sm:inline">هنالك بعض الأخطاء.</span>
        </div>
        @endif --}}

        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-100">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">جهة الطالب</p>
                <p class="text-xs">ادخال بيانات الطالب</p>
            </div>
            <div class="grid grid-cols-4 gap-4 col-span-full lg:col-span-3">
                <x-form.input label="الاسم الأول" name="firstName" />
                <x-form.input label="الاسم الأخير" name="lastName" />
                <x-form.input label="البريد الالكتروني" name="email" />
                <x-form.input label="الجوال" name="mobile" />
                <x-form.input label="كلمة المرور" name="password" type="password" />
                <x-form.input label="تأكيد كلمة المرور" name="confirmPassword" type="password" />

                <!--  dropdown region and city -->
                <x-form.form-dropdown label="المنطقة" name="region">
                    <option selected value="none">اختر المنطقة</option>
                    @foreach($regions as $region)
                    <option value={{ $region ->id }}>{{ $region ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                @if(count($cities) > 0)
                <x-form.form-dropdown label="المدينة" name="city">
                    <option selected value="none">اختر المدينة</option>
                    @foreach($cities as $city)
                    <option value={{ $city ->id }}>{{ $city ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>
                @else
                <x-form.field />
                @endif

                <!--  dropdown university and department -->
                <x-form.form-dropdown label="الجامعة" name="university">
                    <option selected value="none">اختر الجامعة</option>
                    @foreach($universities as $university)
                    <option value={{ $university ->id }}>{{ $university ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>

                @if(count($departments) > 0)
                <x-form.form-dropdown label="الكلية" name="department">
                    <option selected value="none">اختر الكلية</option>
                    @foreach($departments as $department)
                    <option value={{ $department ->id }}>{{ $department ->name }}</option>
                    @endforeach
                </x-form.form-dropdown>
                @else
                <x-form.field />
                @endif

                <!--  dropdown gender -->
                <x-form.form-dropdown label="الجنس" name="gender">
                    <option selected>اختر الجنس</option>
                    <option value="f">أنثى</option>
                    <option value="m">ذكر</option>
                </x-form.form-dropdown>

                <x-form.input label="التخصص" name="major" />
                <x-form.input label="سنة التخرج" name="graduation_year" />
                <x-form.form-dropdown label="فترة التدريب" name="training_date">
                    <option selected>اختر فترة التدريب</option>
                    <option value="firstsemester">الفصل الأول</option>
                    <option value="secondsemester">الفصل الثاني</option>
                    <option value="thirdsemester">الفصل الثالث</option>
                    <option value="summersemester">الفصل الصيفي</option>
                </x-form.form-dropdown>


                <x-form.form-dropdown label="نوع المعدل" name="gpa_type">
                    <option selected>اختر نوع المعدل</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </x-form.form-dropdown>
                <x-form.input label="المعدل" name="gpa" />

                <x-form.form-dropdown label="الدرجة العلمية" name="academic_degree">
                    <option selected>الدرجة العلمية</option>
                    <option value="bachelor">بكالوريوس</option>
                    <option value="diploma">دبلوم</option>
                </x-form.form-dropdown>
                <x-form.field />

                <x-form.field>
                    <x-form.label label="السجل الأكاديمي" name="academic_transaction" />
                    <div class="flex">
                        <input type="file" wire:model="academic_transaction" name="academic_transaction"
                            id="academic_transaction"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    {{-- @error("academic_transaction")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror --}}
                </x-form.field>

                <x-form.field>
                    <x-form.label label="السيرة الذاتية" name="cv" />
                    <div class="flex">
                        <input type="file" wire:model="cv" name="cv" id="cv"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    {{-- @error("cv")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror --}}
                </x-form.field>

                @if(! $traineeType)
                <div class="flex py-3 col-span-4 sm:col-span-4">
                    <label class="ml-4">هل أنت طالب أم خريج؟</label>
                    <x-form.trainee-type id="default-radio-1" value="طالب" class="px-2" />
                    <x-form.trainee-type id="default-radio-2" value="خريج" class="px-2" />
                </div>
                @endif

                @if($traineeType == "طالب")

                <x-form.input label="الرقم الجامعي" name="studentNumber" />
                <x-form.input label="ساعات التدريب" name="trainingHours" />

                <x-form.field>
                    <div class=" flex items-center justify-between text-right">
                        <x-form.button type="submit" color="blue" text="إنشاء الحساب" />
                    </div>
                </x-form.field>

                @elseif($traineeType == "خريج")
                <x-form.field>
                    <x-form.label label="وثيقة التخرج" name="graduation_certificate" />
                    <div class="flex">
                        <input type="file" wire:model="graduation_certificate" name="graduation_certificate"
                            id="graduation_certificate"
                            class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    </div>
                    {{-- @error("graduation_certificate")
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror --}}
                </x-form.field>

                <x-form.field />
                <x-form.field>
                    <div class=" flex items-center justify-between text-right">
                        <x-form.button type="submit" color="blue" text="إنشاء الحساب" />
                    </div>
                </x-form.field>
                @endif
            </div>
        </fieldset>
    </form>
</div>