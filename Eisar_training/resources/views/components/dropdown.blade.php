@props(['trigger'])

<div class="relative ml-6">

    <div x-data="{ show: false }" @click.away="show=false">
        {{-- place the (thing) u click to show menu --}}
        <div @click="show=!show">
            {{ $trigger }}
        </div>

        {{-- place drop down menu --}}
        <div x-show="show" class="origin-top-right text-right absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white "
            style="display:none">
            {{ $slot }}
        </div>

    </div>
</div>
