<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studen paget</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <x-colors />
</head>

<body>

    <!-- if the user is auth -->
    <div class="grid grid-cols-5">
        <x-student.student-side-menu />
        <div class="col-span-4">
            <x-student.student-navbar class="px-0" />
            <div class="flex justify-start items-start gap-12 mt-2 ">
                <x-student.student-cards color="bg-orange-500" />
                <x-student.student-cards color="bg-orange-200" />
                <x-student.student-cards color="bg-green-200" />
            </div>
            <div class="grid grid-cols-2 mt-10">
                <div>
                    <h1>المهام</h1>
                    <x-student.student-tasks-card color="border-orange-500" />
                    <x-student.student-tasks-card color="border-orange-500" />
                    <x-student.student-tasks-card color="border-orange-500" />
                </div>
                <div>
                    <h1>الاحصائيات الاسبوعية</h1>
                    <x-chart />
                </div>
            </div>
        </div>
    </div>






</body>

</html>