<nav {{ $attributes(['class' => 'px-3 py-4 ']) }}>
    <div x-data="{ show: false }" class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div @click="show=!show" class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                {{-- Mobile menu button --}}
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-orange-500 hover:text-white hover:bg-orange-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">فتح القائمة الرئيسية</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            {{-- main menu --}}
            <div class=" flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center ml-6">
                    <img class="block lg:hidden h-6 w-auto" src="\storage\images\eisar-logo.svg" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto" src="\storage\images\eisar-logo.svg" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex ">

                        <x-navbar-item link='/'>
                            قائمة الفرص
                        </x-navbar-item>

                        @auth
                            <x-navbar-item link='#'>
                                طلبات التدريب
                            </x-navbar-item>


                            <x-navbar-item link='#'>
                                لوحة التحكم
                            </x-navbar-item>

                        @endauth

                        @guest
                            <x-navbar-item link='#'>
                                انشاء حساب
                            </x-navbar-item>
                        @endguest

                    </div>
                </div>

            </div>

            <div class="absolute inset-y-0 left-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Profile dropdown --}}
                <x-profile-dropdown />

            </div>
        </div>
        {{-- Mobile menu, show/hide based on menu state. --}}
        <div x-show="show" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="bg-orange-500 text-white block px-3 py-2 rounded-md text-base font-medium"
                    aria-current="page">قائمة الفرص</a>

                <a href="#"
                    class="text-red-300 hover:bg-orange-200 hover:text-white block px-3 py-2 rounded-md text-base font-medium">طلبات
                    التدريب</a>

                <a href="#"
                    class="text-red-300 hover:bg-orange-200 hover:text-white block px-3 py-2 rounded-md text-base font-medium">لوحة
                    التحكم</a>

                <a href="#"
                    class="hidden text-red-300 hover:bg-orange-200 hover:text-white block px-3 py-2 rounded-md text-base font-medium">انشاء
                    الحساب</a>
            </div>
        </div>
    </div>
</nav>
