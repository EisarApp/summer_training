@props(['type'=>"",
'color'=>"",
'text'=>"",
])
<button type="{{$type}}"
    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{$color}}-900 hover:bg-{{$color}}-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{$color}}-400">
    {{$text}}
</button>
