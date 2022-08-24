<html dir="rtl">

<head>
    <x-head />
    </x-colors>
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col float-left md:flex-col">
                {{-- button --}}
                <div class="block relative">
                    <x-table-button>عرض صلاحيات الموظفين </x-table-button>
                    <x-table-button> إضافة موظف جديد </x-table-button>
                </div>

            </div>
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <x-search-input>ابحث باسم الموظف</x-search-input>
                </div>

            </div>
            <x-company.company-dashboard>
                {{-- temporary --}}
                @php
                $Users=array('pen'=>'33','jhon'=>'55');
                @endphp
                <x-table :headers="['اسم الموظف','المسمى الوظيفي',' القسم','الايميل','رقم الجوال',' ']">
                    @foreach($Users as $user=> $data)
                    <tr>
                        <x-table-data>
                            {{$data;}}
                            {{-- {{$user->name;}} --}}
                        </x-table-data>
                        <x-table-data>
                            {{$data;}}
                        </x-table-data>
                        <x-table-data>
                            {{-- last column --}}
                            <div class="block relative justify-center">
                                <div>
                                    <button type="button"
                                        class="inline-block mr-2 float-left px-4 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-800 hover:shadow-lg focus:bg-orange-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">
                                        تواصل</button>

                                </div>
                            </div>
                        </x-table-data>
                    </tr>
                    @endforeach
                </x-table>
            </x-company.company-dashboard>
        </div>
    </div>
</body>

</html>