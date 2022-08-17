<html dir="rtl">

<head>
    <x-head/>
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- filtter input  if exite--}}
                <div class="block relative">

                </div>

            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg">
                    <table class="min-w-full leading-normal text-right">
                        <thead
                            class="border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-4">
                                    اسم الخطة
                                </th>
                                <th class="px-5 py-4">
                                    القسم المسؤول
                                </th>
                                <th class="px-5 py-4">
                                    الية التدريب
                                </th>
                                <th class="px-5 py-4">
                                    عدد الطلاب
                                </th>
                                <th class="px-5 py-4">
                                    نوع التدريب
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
                                            <p class="text-gray-900 whitespace-no-wrap text-right">
                                                الخطة الأولى
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">قسم تقنية المعلومات</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        حضوري
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        40
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        صيفي
                                    </p>
                                </td>

                            
                                <td class="px-5 py-4">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            {{-- <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg> --}}
                                            <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 2C10.4477 2 10 2.44772 10 3V4H14V3C14 2.44772 13.5523 2 13 2H11ZM16 4V3C16 1.34315 14.6569 0 13 0H11C9.34315 0 8 1.34315 8 3V4H3C2.44772 4 2 4.44772 2 5C2 5.55228 2.44772 6 3 6H3.10496L4.80843 21.3313C4.97725 22.8506 6.26144 24 7.79009 24H16.2099C17.7386 24 19.0228 22.8506 19.1916 21.3313L20.895 6H21C21.5523 6 22 5.55228 22 5C22 4.44772 21.5523 4 21 4H16ZM18.8827 6H5.11726L6.7962 21.1104C6.85247 21.6169 7.28054 22 7.79009 22H16.2099C16.7195 22 17.1475 21.6169 17.2038 21.1104L18.8827 6ZM10 9C10.5523 9 11 9.44771 11 10V18C11 18.5523 10.5523 19 10 19C9.44772 19 9 18.5523 9 18V10C9 9.44771 9.44772 9 10 9ZM14 9C14.5523 9 15 9.44771 15 10V18C15 18.5523 14.5523 19 14 19C13.4477 19 13 18.5523 13 18V10C13 9.44771 13.4477 9 14 9Z" fill="#ba110b" id="id_101"></path>
                                                </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div>
                <button type="button"
                    class=" float-left mb-2 w-64 px-6 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                    خطة</button>
            </div>
        </div>
    </div>
</body>

</html>