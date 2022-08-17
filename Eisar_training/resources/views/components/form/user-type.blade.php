@props(['value'=>"",
'class'])
<x-form.field class="{{$class}}">

    <input wire:model="userType" id="default-radio-1" type="radio" value="{{$value}}" name="default-radio"
        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600" required>
    <label for="default-radio-1" class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $value }}</label>
</x-form.field>
{{-- focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 --}}