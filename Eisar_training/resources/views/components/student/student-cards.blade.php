@props(['color'])
<x-cards-dashboard class="{{$color}}">
    <x-slot name="pics">
        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="">
        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="">
        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="">
        <a class="flex justify-center items-center w-10 h-10 text-xs font-medium text-gray-900 bg-white rounded-full border-2 border-white hover:bg-gray-200 dark:border-gray-800"
            href="#">+7</a>
    </x-slot>
    <span>مسار تطبيقات الجوال</span>

</x-cards-dashboard>