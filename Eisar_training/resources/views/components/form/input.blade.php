@props(['label' => "",
'name'=>"",
'class'=>""
])

<x-form.field>
    <x-form.label label="{{$label}}" name="{{ $name }}" />

    <input wire:model.lazy="{{ $name }}" 
           name="{{ $name }}"
           id="{{ $name }}"
           class="border border-gray-200 p-2 w-full rounded"
           placeholder="{{$label}}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>