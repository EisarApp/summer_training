<div>
    <div class="col-span-1">
        <span class="absolute  lg:hidden text-gray text-4xl top-5 right-4 cursor-pointer " onclick="Openbar()">
            <i class="bi bi-filter-right px-2 rounded-md "></i>
        </span>

        <div
            class="fixed sidebar  top-0 bottom-0 lg:right-0 right-[0px] duration-1000
            p-2 w-[260px] overflow-y-auto text-center bg-gray-100 shadow h-screen overflow-hidden">
            <div class="text-gray-500 text-xl">
                <div class="p-2.5 mt-1 flex items-center rounded-md">
                    <h1 class="text-[15px] mb-7 mt-5 text-xl text-gray-500 font-bold"> <img src="images\logo.png"
                            alt="">
                    </h1>
                    <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
                </div>
                <div>
                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300 ">
                        <a href="#">
                            <div class="p-2.5 mt-2 flex items-center cursor-pointer hover:text-white  ">
                                <iconify-icon icon="codicon:home" width="24" height="24"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">الصفحة
                                    الرئيسية</span>
                            </div>
                        </a>
                    </div>
                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="material-symbols:conversion-path"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">الخطة
                                    التدريبة</span>
                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="fluent:tasks-app-28-regular"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">المهام</span>


                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="codicon:file"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">التقارير</span>


                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="fluent:document-bullet-list-multiple-24-regular" width="24"
                                    height="24">
                                </iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">النماذج</span>

                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="eva:person-done-outline" width="26" height="26">
                                </iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">الغيابات
                                    والتاخير</span>

                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="fluent:mail-24-regular"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">التواصل
                                </span>

                            </div>
                        </a>
                    </div>

                    <div class="hover:bg-gradient-to-r from-blue-200 to-blue-900  px-4 duration-300">
                        <a href="#">
                            <div
                                class="p-2.5 mt-2 flex items-center cursor-pointer   hover:text-white dark:hover:text-white ">
                                <iconify-icon icon="ep:setting"></iconify-icon>
                                <span
                                    class="text-[15px] mr-4 text-base text-gray group-hover:text-white ml-auto text-sm">
                                    الاعدادات</span>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function dropDown() {
        document.querySelector('#submenu').classList.toggle('hidden')
        document.querySelector('#arrow').classList.toggle('rotate-0')
    }
    dropDown()

    function Openbar() {
        document.querySelector('.sidebar').classList.toggle('right-[-300px]')
    }
</script>
