<!-- This is an example component -->
<x-head />
<html lang="ar" dir="rtl">
<div class="max-w-2xl mx-auto bg-white p-16">
    <form action="/{{ $plan->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="grid gap-6 mb-6 lg:grid-cols-4 gap-y-10">

            <input type="hidden" name="created_by" id="created_by" value="{{ $plan->created_by }}">

            <input type="hidden" name="company_id" id="company_id" value="{{ $plan->company->id }}">

            <x-form.field>
                <x-form.input label="اسم الخطة" name="name" :value="old('name', $plan->name)" />
            </x-form.field>

            <div class="col-span-4">
                <x-form.label label="الوصف" name="description" />
                <textarea class="border border-gray-200 p-2 w-full rounded" name="description">
                    {{ $plan->description }}
                </textarea>
                @error('description')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <x-form.field>
                <x-form.input label="القسم" name="department" :value="old('department', $plan->department)" />
            </x-form.field>

            <x-form.field>
                <x-form.input label="عدد الطلاب" name="students_number" type="number" :value="old('students_number', $plan->students_number)" />
            </x-form.field>

            <x-form.field>
                <x-form.label label="تاريخ بداية التدريب" name="starting_time" />
                <input type="date" id="starting_time" name="starting_time"
                    value="{{ date('Y-m-d', strtotime("$plan->starting_time")) }}"
                    class="border text-xs border-gray-200 p-2 w-full rounded text-gray-600"
                    placeholder="تاريخ بداية التدريب">
            </x-form.field>
            <x-form.field>
                <x-form.label label="تاريخ نهاية التدريب" name="ending_date" />
                <input type="date" id="starting_time" name="ending_date"
                    value="{{ date('Y-m-d', strtotime("$plan->ending_date")) }}"
                    class="border text-xs border-gray-200 p-2 w-full rounded text-gray-600"
                    placeholder="تاريخ نهاية التدريب">
            </x-form.field>

            <div class="flex justify-between col-span-4 sm:col-span-4">
                <x-form.label label="نوع التدريب" name="training_type" />
                <x-form.field class="px-2">
                    <input id="default-radio-1" type="radio" value="summer" name="training_type"
                        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                        required {{ $plan->training_type == 'summer' ? ' checked' : '' }}>
                    <label for="default-radio-1"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">صيفي</label>
                </x-form.field>

                <x-form.field class="px-2">
                    <input id="default-radio-2" type="radio" value="cooperative" name="training_type"
                        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                        required {{ $plan->training_type == 'cooperative' ? ' checked' : '' }}>
                    <label for="default-radio-2"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">تعاوني</label>
                </x-form.field>
            </div>

            <div class="flex justify-between col-span-4 sm:col-span-4">
                <x-form.label label="آلية التدريب" name="training_method" />
                <x-form.field class="px-2">
                    <input id="default-radio-3" type="radio" value="remote" name="training_method"
                        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                        required {{ $plan->training_method == 'remote' ? ' checked' : '' }}>
                    <label for="default-radio-3"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">عن بعد</label>
                </x-form.field>

                <x-form.field class="px-2">
                    <input id="default-radio-4" type="radio" value="on-site" name="training_method"
                        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                        required {{ $plan->training_method == 'on-site' ? ' checked' : '' }}>
                    <label for="default-radio-4"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">حضوري</label>
                </x-form.field>
            </div>

            <div class="flex justify-content col-span-4 sm:col-span-4">
                <x-form.field class="px-2">
                    <input id="require_training_letter" type="checkbox" value="require_training_letter"
                        name="require_training_letter"
                        class="rounded w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                         {{ $plan->require_training_letter == 1 ? ' checked' : '' }}>
                    <label for="default-radio"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">طلب خطاب تدريب</label>
                </x-form.field>
                <x-form.field class="px-2">
                    <input id="require_national_id" type="checkbox" value="require_national_id"
                        name="require_national_id"
                        class="rounded w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
                         {{ $plan->require_national_id == 1 ? ' checked' : '' }}>
                    <label for="default-radio"
                        class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">طلب الهوية الوطنية
                    </label>
                </x-form.field>
            </div>

            <x-form.form-dropdown label="اختر المشرف" name="supervisor_id">
                @foreach ($employees as $employee)
                    <option value={{ $employee->id }} {{ $plan->supervisor_id == $employee->id ? ' selected' : '' }}>
                        {{ $employee->information->name }}
                    </option>
                @endforeach
            </x-form.form-dropdown>
        </div>
        <x-form.field>
            <div class=" flex items-center justify-between text-right">
                <x-form.button type="submit" color="blue" text="حفظ التعديلات" />
            </div>
        </x-form.field>
</div>

</html>
