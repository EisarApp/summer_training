<x-head />

<body>
    @can('trainee')
    <x-student.student-dashboard />
    @endcan

    @can('university')
    <x-university.university-dashboard />
    @endcan

    @can('company')
    <x-company.company-dashboard />
    @endcan
</body>