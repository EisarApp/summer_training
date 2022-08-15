<html dir="rtl">

<head>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
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
                                    f
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

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{-- icons here --}}
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="">
            <button type="button" class="mb-2 w-64 px-6 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إضافة خطة</button>
            </div>
        </div>
    </div>
</body>

</html>