<html dir="rtl">
<head>
    <x-head />
    <x-colors />
</head>


<body class="antialiased font-sans">


    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <x-search-input> ادخل رقم الطلب</x-search-input>
                </div>
            </div>
            {{-- temporary --}}
            @php
            $Users=array('pen'=>'33','jhon'=>'55');
            @endphp
            <x-table
                :headers="['رقم الطلب ', ' الشركة ', ' المسار ', 'حالة الطلب ', 'تاريخ انتهاء المرحلة الحالية ', ' مقدم الطلب','ملاحظات',' ']">
                @foreach($Users as $user=> $data)

                <tr>

                    <x-table-data>
                        <img class="w-full h-full rounded-full"
                        src="{{$data}}"
                        alt="" />
                        {{$data;}}
                        {{-- {{$user->name;}} --}}
                    </x-table-data>

                    <x-table-data>
                        {{$data;}}
                    </x-table-data>

                    <x-table-data>
                        {{$data;}}
                    </x-table-data>

                    <x-table-data>
                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-50 border border-green-900 opacity-50 rounded-full"></span>
                            <span class="relative">بأنتظار التأكيد</span>
                        </span>
                    </x-table-data>

                    <x-table-data>
                        {{$data;}}
                    </x-table-data>

                    <x-table-data>
                        {{$data;}}
                    </x-table-data>

                    <x-table-data>
                        {{$data;}}
                    </x-table-data>

                    <x-table-data>
                        {{-- the last column --}}
                        @can('trainee')
                        <div class="my-2 flex sm:flex-row flex-col">

                            <div class="inline-flex relative">
                                <x-table-button>تأكيد الطلب </x-table-button>
                                <x-table-button> إلغاء الطلب</x-table-button>

                            </div>

                        </div>
                        @endcan

                    </x-table-data>
                </tr>

                @endforeach
            </x-table>
        </div>
    </div>
</body>

</html>