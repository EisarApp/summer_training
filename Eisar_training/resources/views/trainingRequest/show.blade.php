<html dir="rtl">

<head>
    <x-head />
    <title>طلبات التدريب</title>
    <x-colors />
</head>


<body class="antialiased font-sans">
    <x-public-pages-navbar />

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8 ">
            <div class="my-2 flex sm:flex-row flex-col">
                {{-- search input --}}
                <div class="block relative">
                    <x-search-input> ادخل رقم الطلب</x-search-input>
                </div>
            </div>

            <x-table :headers="['رقم الطلب ', ' الشركة ', ' الخطة ', 'حالة الطلب ', ' مقدم الطلب', ' ملاحظات', ' ']">
                @foreach ($requests as $request)
                    <tr>

                        <x-table-data>
                            <img class="w-full h-full rounded-full" src="{{ '' }}" alt="" />
                            {{ $request->id }}
                            {{-- {{$user->name;}} --}}
                        </x-table-data>

                        <x-table-data>
                            {{ App\Models\Plan::find($request->plan_id)->company->information->name }}
                        </x-table-data>

                        <x-table-data>
                            {{ App\Models\Plan::find($request->plan_id)->name }}
                        </x-table-data>

                        <x-table-data>
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden
                                    class="absolute inset-0 bg-green-50 border border-green-900 opacity-50 rounded-full"></span>
                                <span class="relative">{{ $request->status }}</span>
                            </span>
                        </x-table-data>

                        <x-table-data>
                            {{ App\Models\User::find($request->user_id)->name }}
                        </x-table-data>

                        <x-table-data>
                            {{ $request->notes }}
                        </x-table-data>


                        @if ($request->status == 'waitingforconfirm')
                            <x-table-data>
                                {{-- the last column --}}
                                <div class="my-2 flex sm:flex-row flex-col">

                                    <div class="inline-flex relative">
                                        <x-table-button>تأكيد الطلب </x-table-button>
                                        <x-table-button> إلغاء الطلب</x-table-button>
                                    </div>
                                </div>
                            </x-table-data>
                        @endif
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
</body>

</html>
