@props(['value'=>"",'class', 'id'])
<x-form.field class="{{$class}}">
    <input wire:model="traineeType" id="{{$id}}" type="radio" value="{{$value}}" name="default-radio"
        class="w-4 h-4 text-blue-600 bg-gray-100 focus:outline-hidden border-gray-300 dark:bg-gray-700 dark:border-gray-600"
        required>
    <label for="{{$id}}" class="pl-3 pml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $value
        }}</label>
</x-form.field>