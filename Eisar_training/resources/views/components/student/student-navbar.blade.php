<nav {{ $attributes(['class' => 'py-4 ']) }}>
    <div x-data="{ show: false }" class="max-w-7xl mx-auto">
        <div class="relative flex items-center justify-between h-16">
            {{-- TODO: use alpine --}}
      

            {{-- main menu --}}
                <div class=" flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="sm:block sm:ml-6">
                        <div class="">
                        <!-- قائمة الفرص  --> 
                        <h1>جمانه احمد مطهر</h1>
                        </div>
                    </div>

                </div>
            <div class="absolute inset-y-0 left-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Profile dropdown --}}
                <x-profile-dropdown />

            </div>
        </div>
       
    </div>


</nav>
