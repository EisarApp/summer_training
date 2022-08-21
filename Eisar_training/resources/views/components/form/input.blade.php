@props(['label' => "",
'name'=>"",
'class'=>""
])

<x-form.field>
    <x-form.label label="{{$label}}" name="{{ $name }}" />

    <input wire:model.lazy="{{ $name }}" name="{{ $name }}" id="{{ $name }}"
        class="border text-xs border-gray-200 p-2 w-full rounded text-gray-600" placeholder="{{$label}}" {{ $attributes(['value'=> old($name)]) }}/>


    @error($name)
    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
    @enderror

</x-form.field>