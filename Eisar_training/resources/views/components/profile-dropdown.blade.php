<x-dropdown>
    <x-slot name="trigger">

        <div>
            <button type="button"
                class="bg-orange flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-orange focus:ring-white"
                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">فتح القائمة الرئيسية</span>
                <img class="h-10 w-10 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="user profile picture">
            </button>
        </div>
    </x-slot>
    <x-dropdown-item><a href="#" class="block px-4 py-2 text-sm text-red-400" role="menuitem" tabindex="-1"
            id="user-menu-item-0">الملف الشخصي</a></x-dropdown-item>
    <x-dropdown-item><a href="#" class="block px-4 py-2 text-sm text-red-400" role="menuitem" tabindex="-1"
            id="user-menu-item-1">الإعدادات</a></x-dropdown-item>
    <x-dropdown-item> <a href="#" class="block px-4 py-2 text-sm text-red-400" role="menuitem" tabindex="-1"
            id="user-menu-item-2">تسجيل الخروج</a></x-dropdown-item>

</x-dropdown>
