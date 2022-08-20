<!-- This is an example component -->
<x-head />
<div class="max-w-2xl mx-auto bg-white p-16">
    <form action="/{{ $plan->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">اسم
                    الخطة
                </label>
                <input type="text" id="name" name="name" value="{{ $plan->name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <input type="hidden" name="created_by" id="created_by" value="1">

            <input type="hidden" name="company_id" id="company_id" value="1">

            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    وصف الخطة</label>
                <input type="text" id="description" name="description" value="{{ $plan->description }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    القسم </label>
                <input type="text" id="department" name="department" value="{{ $plan->department }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="students_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    عدد الطلاب</label>
                <input type="text" id="students_number" name="students_number" value="{{ $plan->students_number }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe">
            </div>
            <div>
                <label for="starting_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    تاريخ البدء</label>
                <input type="date" id="starting_time" name="starting_time"
                    value="{{ date('Y-m-d', strtotime("$plan->starting_time")) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe">
            </div>
            <div>
                <label for="ending_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    تاريخ الانتهاء</label>
                <input type="date" id="ending_date" name="ending_date"
                    value="{{ date('Y-m-d', strtotime("$plan->ending_date")) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe">
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="require_training_letter" type="checkbox" name="require_training_letter"
                        value="{{ $plan->require_training_letter }}"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                </div>
                <label for="require_training_letter"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">طلب خطاب تدريب </label>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="require_national_id" type="checkbox" name="require_national_id"
                        value="{{ $plan->require_national_id }}"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                </div>
                <label for="require_national_id" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">طلب
                    هوية
                </label>
            </div>


            <div class="flex items-start mb-6">
                <p>نوع التدريب</p>

                <input type="radio" id="training_type" name="training_type" value="summer"
                    {{ $plan->training_type == 'summer' ? ' checked' : '' }}>
                <label for="summer">صيفي</label><br>
                <input type="radio" id="training_type" name="training_type" value="cooperative"
                    {{ $plan->training_type == 'cooperative' ? ' checked' : '' }}>
                <label for="cooperative">تعاوني</label><br>
            </div>

            <div class="flex items-start mb-6">
                <p>الية التدريب</p>
                <input type="radio" id="training_method" name="training_method" value="on-site"
                    {{ $plan->training_method == 'on-site' ? ' checked' : '' }}>
                <label for="on-site">حضوري</label><br>

                <input type="radio" id="training_method" name="training_method" value="remote"
                    {{ $plan->training_method == 'remote' ? ' checked' : '' }}>
                <label for="remote">عن بعد</label><br>
            </div>

            <div class="flex items-start mb-6">
                <label for="supervisor_id">اختر المشرف</label>

                <select name="supervisor_id" id="supervisor_id">
                    @foreach ($employees as $employee)
                        <option value={{ $employee->id }}
                            {{ $plan->supervisor_id == $employee->id ? ' selected' : '' }}>
                            {{ $employee->information->name }}
                        </option>
                    @endforeach
                </select>
            </div>


        </div>

</div>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>


</div>
