<html dir="rtl">

<head>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
</head>
<style>
    .dropdown:hover>.dropdown-content {
        display: block;
    }
</style>


<body class="antialiased font-sans">


    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col float-left">
                {{-- filtter input if exite--}}
                <div class="block relative">
                    <button type="button"
                        class="inline-block mr-2 float-left px-4 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                        طالب جديد
                    </button>
                    <button type="button"
                        class="inline-block ml-2 float-left px-4 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إستراد
                        طلاب
                    </button>
                </div>

            </div>

            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}

                <div class="dropdown block relative mx-2">
                    <button
                        class=" appearance-none rounded border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                        <span class="pl-5">الشعبة</span>
                    </button>
                    <ul class="dropdown-content absolute hidden text-gray-700 pt-1">
                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Option 1</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Option
                                2</a></li>
                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Option 4</a></li>
                    </ul>
                </div>
                <div class="dropdown block relative ">
                    <button
                        class=" appearance-none rounded  border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                        <span class="pl-5">الجهة</span>
                    </button>
                    <ul class="dropdown-content absolute hidden text-gray-700 pt-1">
                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Option 1</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Option
                                2</a></li>
                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="#">Option 4</a></li>
                    </ul>
                </div>

            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg">
                    <table class="min-w-full leading-normal text-right">
                        <thead
                            class="border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-4">
                                    اسم الطالب
                                </th>
                                <th class="px-5 py-4">
                                    الرقم الجامعي
                                </th>
                                <th class="px-5 py-4">
                                    اسم الجهة
                                </th>
                                <th class="px-5 py-4">
                                    اسم مسؤول الجهة
                                </th>
                                <th class="px-5 py-4">
                                    الشعبة
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                جمانه مطهر
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"> 439000877 </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        إيسار
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        أ.ربى الكراني
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        12
                                    </p>
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