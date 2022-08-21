<html dir="rtl">

<head>
    <x-head />
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col float-left">
                {{-- filtter input if exite--}}
                <div class="block">
                    <x-table-button>إضافة موظف جديد</x-table-button>

                </div>


            </div>

            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <x-search-input>ابحث باسم الموظف</x-search-input>
                </div>

            </div>
            {{-- temporary --}}
            @php
            $Users=array('pen'=>'33','jhon'=>'55');
            @endphp
            <x-table :headers="['الرقم','اسم الموظف','الصلاحيات','المسمى الوظيفي','القسم','الخطة']">
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
                        {{-- the last column --}}
                        <div class="my-2 flex sm:flex-row flex-col">

                            <div class="inline-flex relative">
                                <x-table-button>تعديل الصلاحية</x-table-button>
                                <x-table-button> عرض</x-table-button>
                                <x-table-button> تغير كلمة المرور</x-table-button>
                            </div>

                        </div>
                    </x-table-data>
                </tr>

                @endforeach
            </x-table>
        </div>
    </div>
</body>

</html>