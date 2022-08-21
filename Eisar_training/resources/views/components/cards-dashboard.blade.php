@props(['pics'])
<div {{$attributes(['class'=> "item w-64 h-52 text-white rounded "])}}>

    <div class="flex -space-x-4 mt-5 mr-5 rounded   ">
        {{$pics}}
    </div>
    <div>
        <h4 class="text-md mt-10 mr-5 ">
            {{$slot}}
        </h4>
    </div>
</div>