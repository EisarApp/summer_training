<html dir="rtl">

<head>
 <x-head/>
</head>
{{-- <style>
    .dropdown:hover>.dropdown-content {
        display: block;
    }
</style> --}}

<body class="antialiased font-sans">


    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col float-left">
                {{-- filtter input if exite--}}
                <div class="block relative">
                    <button type="button"
                        class="inline-block mr-2 float-left px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                        طالب جديد
                    </button>
                    <button type="button"
                        class="inline-block mr-2 float-left px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">إستراد
                        طلاب
                    </button>
                </div>

            </div>

            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}

                <div class="block relative mx-2 " x-data="{open:false}">
                    <button
                        class="appearance-none rounded border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                        @click="open = ! open">
                        <span class="pl-5">الشعبة</span>
                    </button>
                    <ul class=" absolute text-gray-700 pt-1" x-show="open" @click.outside="open = false">
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            اول خيار
                        </li>
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            ثاني خيار
                        </li>
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            ثالث خيار
                        </li>
                    </ul>

                </div>
                <div class="block relative " x-data="{open:false}">
                    <button
                        class="appearance-none rounded border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                        @click="open = ! open">
                        <span class="pl-5">الجهة</span>
                    </button>
                    <ul class=" absolute text-gray-700 pt-1" x-show="open" @click.outside="open = false">
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            اول خيار
                        </li>
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            ثاني خيار
                        </li>
                        <li
                            class="rounded-t text-right bg-gray-100 hover:bg-gray-200 py-2 pl-8 pr-2 block whitespace-no-wrap">
                            ثالث خيار
                        </li>
                    </ul>

                </div>

            </div>
            <x-table :headers="['اسم الخطة','القسم']">
                @foreach($Users as $user=> $data)
                <tr>

                    <x-table-data>
                        {{$data;}}
                        {{-- {{$user->name;}} --}}
                    </x-table-data>
                    <x-table-data>
                        {{$data;}}
                    </x-table-data>
                </tr>

                @endforeach
            </x-table>
        </div>
    </div>
</body>

</html>