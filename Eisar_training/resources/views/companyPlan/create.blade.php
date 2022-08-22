<!-- This is an example component -->
<x-head />
<div class="max-w-2xl mx-auto bg-white p-16">

    <form action="/admin/{{$company->id}}/plans" method="post">
        @csrf
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">اسم
                    الخطة
                </label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John" required>
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <input type="hidden" name="created_by" id="created_by" value="{{auth()->user()->id}}">

            <input type="hidden" name="company_id" id="company_id" value="{{ $company->id }}">

            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    وصف الخطة</label>
                <input type="text" id="description" name="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    القسم </label>
                <input type="text" id="department" name="department"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="students_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    عدد الطلاب</label>
                <input type="text" id="students_number" name="students_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="starting_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    تاريخ البدء</label>
                <input type="date" id="starting_time" name="starting_time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="ending_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    تاريخ الانتهاء</label>
                <input type="date" id="ending_date" name="ending_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Doe" required>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="require_training_letter" type="checkbox" name="require_training_letter" value=1
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                </div>
                <label for="require_training_letter"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">طلب خطاب تدريب</label>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="require_national_id" type="checkbox" name="require_national_id" value=1
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                </div>
                <label for="require_national_id" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">طلب
                    هوية
                </label>
            </div>


            <div class="flex items-start mb-6">
                <p>نوع التدريب</p>
                <input type="radio" id="summer" name="training_type" value="summer">
                <label for="summer">صيفي</label><br>
                <input type="radio" id="cooperative" name="training_type" value="cooperative">
                <label for="cooperative">تعاوني</label><br>
            </div>
            <div class="flex items-start mb-6">
                <p>الية التدريب</p>
                <input type="radio" id="on-site" name="training_method" value="on-site">
                <label for="on-site">حضوري</label><br>
                <input type="radio" id="remote" name="training_method" value="remote">
                <label for="remote">عن بعد</label><br>
            </div>
            <div class="flex items-start mb-6">
                <label for="supervisor_id">اختر المشرف</label>
                <select name="supervisor_id" id="supervisor_id">
                    @foreach ($employees as $employee)
                        <option value={{ $employee->id }}>{{ $employee->information->name }}</option>
                    @endforeach
                </select>
            </div>


        </div>

</div>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>


</div>
