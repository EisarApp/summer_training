<html dir="rtl">

<head>
    <x-head />
</head>


<body class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- filtter input if exite--}}
                <div class="block relative">

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


            <div>
                <button type="button"
                    class=" float-left mb-2 w-64 px-6 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                    خطة</button>
            </div>
        </div>
    </div>
</body>

</html>