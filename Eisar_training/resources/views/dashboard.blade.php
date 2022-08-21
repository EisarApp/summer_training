<x-head />

<body>
    @can('trainee')
        <x-student.student-dashboard />
    @endcan
</body>
