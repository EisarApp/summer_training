@props(['headers'])
<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
    <div class="inline-block min-w-full shadow rounded-lg">
        <table class="min-w-full leading-normal text-right">
            {{-- table header --}}
            <thead
                class="border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                <tr>
                    {{-- here slot --}}
                    @foreach ($headers as $head)
                    <th class="px-5 py-4">
                       {{$head}}  
                    </th>
                   @endforeach

                </tr>
            </thead>
            {{-- table's contents --}}
            <tbody>
            {{$slot}}

            </tbody>
        </table>

    </div>
</div>