@props(['value'=>"", 'class', 'id'])
<li>
    <input wire:model="userType" id="{{$id}}" type="radio" value="{{$value}}" name="default-radio" class="hidden peer"
        required>
    <label for="{{$id}}" class="{{$class}}">
        <div class="block">
            <div class="w-full text-lg font-semibold">{{$value}}</div>
            {{-- <div class="w-full">إنشاء حساب خاص بالجامعات</div> --}}
        </div>
    </label>
</li>