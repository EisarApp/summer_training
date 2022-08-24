<html dir="rtl">

<head>
    <x-head />
</head>

<body class="antialiased font-sans">
    <x-company.company-dashboard>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="my-2 flex sm:flex-row flex-col">
                <div class="block relative">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="lg:inline-flex flex py-2 pl-10 w-full text-right lg:w-48 rounded-md border border-gray-300 bg-white shadow-sm text-sm text-gray-700 hover:bg-gray-50">

                                <svg class="mr-3 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>

                                نوع التدريب
                
                            </button>
                        </x-slot>
                        <x-dropdown-item href="/admin/{{$company->id}}/plans">
                            الكل
                        </x-dropdown-item>

                        <x-dropdown-item href="/admin/{{$company->id}}/plans/?training_type=summer">
                            summer
                        </x-dropdown-item>
                            
                        <x-dropdown-item href="/admin/{{$company->id}}/plans/?training_type=cooperative ">
                            cooperative
                        </x-dropdown-item>

                    </x-dropdown>
                </div>
            </div>
             @if ($plans->count() > 0)
            <x-table :headers="['اسم الخطة', ' القسم المسؤول', ' الية التدريب', 'عدد الطلاب', 'نوع التدريب', ' ']">
                @foreach ($plans as $plan)
                <tr>

                    <x-table-data>
                        {{ $plan->name }}

                    </x-table-data>

                    <x-table-data>
                        {{ $plan->department }}
                    </x-table-data>

                    <x-table-data>
                        {{ $plan->training_method }}
                    </x-table-data>

                    <x-table-data>
                        {{ $plan->students_number }}
                    </x-table-data>

                    <x-table-data>
                        {{ $plan->training_type }}
                    </x-table-data>
                    @can('company')
                    <x-table-data>
                        <a href="/{{ $plan->id }}/edit"
                            class=" items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </a>
                        <form method="POST" action="/{{ $plan->id }}">
                            @csrf
                            @method('DELETE')
                            <button
                                class="items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Delete">

                                <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 2C10.4477 2 10 2.44772 10 3V4H14V3C14 2.44772 13.5523 2 13 2H11ZM16 4V3C16 1.34315 14.6569 0 13 0H11C9.34315 0 8 1.34315 8 3V4H3C2.44772 4 2 4.44772 2 5C2 5.55228 2.44772 6 3 6H3.10496L4.80843 21.3313C4.97725 22.8506 6.26144 24 7.79009 24H16.2099C17.7386 24 19.0228 22.8506 19.1916 21.3313L20.895 6H21C21.5523 6 22 5.55228 22 5C22 4.44772 21.5523 4 21 4H16ZM18.8827 6H5.11726L6.7962 21.1104C6.85247 21.6169 7.28054 22 7.79009 22H16.2099C16.7195 22 17.1475 21.6169 17.2038 21.1104L18.8827 6ZM10 9C10.5523 9 11 9.44771 11 10V18C11 18.5523 10.5523 19 10 19C9.44772 19 9 18.5523 9 18V10C9 9.44771 9.44772 9 10 9ZM14 9C14.5523 9 15 9.44771 15 10V18C15 18.5523 14.5523 19 14 19C13.4477 19 13 18.5523 13 18V10C13 9.44771 13.4477 9 14 9Z"
                                        fill="#ba110b" id="id_101"></path>
                                </svg>
                            </button>
                        </form>
                    </x-table-data>
                    @endcan
                </tr>
                @endforeach
            </x-table>
            @can('company')
            <div>
                <a href="/admin/{{ $plan->company_id }}/plans/create"
                    class=" text-center float-left mb-2 w-64 px-6 py-2.5 bg-indigo-900 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-indigo-800 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">إضافة
                    خطة</a>
            </div>
            @endcan

            @else
            <p class="text-center">لا يوجد خطط تدريبة</p>
        @endif
        </div>
    </div>
    </x-company.company-dashboard>
</body>

</html>