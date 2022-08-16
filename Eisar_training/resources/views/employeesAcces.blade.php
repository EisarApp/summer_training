<html dir="rtl">

<head>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <x-colors />
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col float-left">
                {{-- filtter input if exite--}}
                <div class="block">
                    <button type="button"
                        class="inline-block float--left mr-2 px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                        موظف جديد
                    </button>
                </div>


            </div>

            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="Search"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>

            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg">
                    <table class="min-w-full leading-normal text-right">
                        <thead
                            class="border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-4">
                                    الرقم
                                </th>
                                <th class="px-5 py-4">
                                    اسم الموظف
                                </th>
                                <th class="px-5 py-4">
                                    الصلاحيات
                                </th>
                                <th class="px-5 py-4">
                                    المسمى الوظيفي
                                </th>
                                <th class="px-5 py-4">
                                    القسم
                                </th>
                                <th class="px-5 py-4">
                                    الخطة
                                </th>
                                <th class="px-5 py-4">

                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                12345
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"> م.هند </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        admin
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        مدرب
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        قسم التدريب والتطوير
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        الخطة
                                    </p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{-- buttons here --}}
                                    {{-- <div class="flex space-x-2 justify-center">

                                    </div> --}}

                                    {{-- <div class="block relative justify-center">
                                        <div>
                                            <button type="button"
                                                class="inline-block px-4 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out">تعديل
                                                الصلاحية</button>
                                            <button type="button"
                                                class="inline-block px-4 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out">عرض</button>
                                            <button type="button"
                                                class="inline-block px-4 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">تغير
                                                كلمة المرور</button>
                                        </div>
                                    </div> --}}
                                    <div class="my-2 flex sm:flex-row flex-col">
                                        {{-- fix the width--}}
                                        <div class="inline-flex relative">
                                            <button type="button"
                                                class="inline-block mr-2 px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">
                                         تعديل الصلاحية
                                            </button>
                                            <button type="button"
                                                class="inline-block mr-2 px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">
                                                عرض
                                            </button>
                                            <button type="button"
                                                class="inline-block mr-2 px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">
                                                تغير كلمة المرور
                                            </button>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>