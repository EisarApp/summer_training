@props(['label' => "",
'name'=>"",
])

<x-form.field>
    <x-form.label label="{{$label}}" />
    <select name="{{$name}}" wire:model="{{$name}}"
        class="border border-gray-200 p-2 w-full rounded indent-8">
        {{$slot}}
    </select>
    {{-- @error($name)
    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
    @enderror --}}
</x-form.field>