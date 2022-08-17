@props(['label' => "",
'name'=>""])

<label class="text-sm" for="{{ $name }}">
    {{ ucwords($label) }}
</label>