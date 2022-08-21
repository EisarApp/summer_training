@props(['active' => false])
@php
$classes = 'block px-4 py-2 text-sm text-orange-400 hover:bg-gray-100"';
if ($active) {
    $classes .= ' bg-orange-500 text-white';
}
@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
