<html dir="rtl">

<head>
    <x-head />
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
                    <x-table-button> إضافة طالب جديد </x-table-button>
                    <x-table-button> إستراد طلاب </x-table-button>

                </div>

            </div>
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <x-search-input>ابحث باسم الطالب</x-search-input>

                </div>
                {{-- change the dropdow --}}
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
            {{-- temporary --}}
            @php
            $Users=array('pen'=>'33','jhon'=>'55');
            @endphp
            <x-table :headers="['اسم الطالب','الرقم الجامعي','اسم الجهة','اسم مسؤول الجهة','الشعبة']">
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