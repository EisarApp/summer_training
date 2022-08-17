<nav {{ $attributes(['class'=> 'py-4 ']) }}>
    <div x-data="{ show: false }" class="max-w-7xl mx-auto">
        <div class=" flex items-center justify-between h-16">
            {{-- TODO: use alpine --}}
            <div class="flex-shrink-0 flex items-center ml-6">
                <img class="h-10 w-10 rounded-full"
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="user profile picture">
               
            </div>

            {{-- main menu --}}
            <div class=" flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="sm:block sm:ml-6">
                    <div class="">
                        
                        <!-- قائمة الفرص  -->
                        
                            <h1 class="text-gray-800 ">جمانه مطهر</h1>
                             <p class="text-gray-500 text-sm">12345678</p>
                    </div>
                </div>

            </div>
            <div class="absolute inset-y-0 left-0 flex items-center pr-2 sm:static sm:inset-auto  sm:ml-6 sm:pr-0">
            {{-- logo and the name of the compony --}}
               <img src="images\company.png" alt=""  >
              
                             
            </div>
        </div>

    </div>


</nav>