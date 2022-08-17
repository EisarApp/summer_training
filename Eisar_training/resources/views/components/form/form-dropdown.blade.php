{{-- @props(['trigger'])

<div class="relative ml-6">

    <div x-data="{ show: false }" @click.away="show=false">

        <div x-on:click="show=!show">
            {{ $trigger }}
        </div>


        <div x-show="show" class="origin-top-right text-right absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white "
            style="display:none">
            {{ $slot }}
        </div>

    </div>
</div> --}}

@props(['label' => "",
'name'=>"",
])

<x-form.field>
    <x-form.label label="{{$label}}" />
    <select name="{{$name}}" wire:model="{{$name}}"
        class="border border-gray-200 p-2 w-full rounded indent-8">
        {{$slot}}
    </select>
</x-form.field>