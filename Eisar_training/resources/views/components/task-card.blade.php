{{-- <div>


    <div
        class="flex shadow-md gap-6 rounded-lg overflow-hidden divide-x max-w-sm dark:bg-gray-900 dark:text-gray-100 divide-gray-700 mt-5 ">
        <div class="flex flex-1 flex-col p-4 border-r-8 border-orange-500">
            <span class="text-md">مسار تطبيقات الجوال</span>
            <span class="text-xs dark:text-gray-400">برمجة صفحة تسجيل الدخول | 15 أغسطس</span>
        </div>
    </div>
    <div
        class="flex shadow-md gap-6 rounded-lg overflow-hidden divide-x max-w-sm dark:bg-gray-900 dark:text-gray-100 divide-gray-700 mt-5 ">
        <div class="flex flex-1 flex-col p-4 border-r-8 border-orange-500">
            <span class="text-md">مسار تطبيقات الجوال</span>
            <span class="text-xs dark:text-gray-400">برمجة صفحة تسجيل الدخول | 15 أغسطس</span>
        </div>
    </div>
    <div
        class="flex shadow-md gap-6 rounded-lg overflow-hidden divide-x max-w-sm dark:bg-gray-900 dark:text-gray-100 divide-gray-700 mt-5 ">
        <div class="flex flex-1 flex-col p-4 border-r-8 border-orange-500">
            <span class="text-md">مسار التسويق الإلكتروني</span>
            <span class="text-xs dark:text-gray-400">التسويق الإلكتروني بالحاسب | 20 أغسطس</span>
        </div>
    </div>
</div> --}}
@props(['description'])
<div class="flex shadow-md gap-6 rounded-lg overflow-hidden divide-x max-w-sm dark:bg-gray-900 dark:text-gray-100 divide-gray-700 mt-5 ">
    <div {{$attributes(['class'=> "flex flex-1 flex-col p-4 border-r-8 border-orange-500 "])}}>
        <span class="text-md"> {{$slot}} </span>
        <span class="text-xs dark:text-gray-400"> {{$description}} </span>
    </div>
</div>