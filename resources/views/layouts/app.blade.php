
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Student Management')</title>
</head>
<body>

    <nav>
        <a href="{{ route('students.index') }}">Students</a>
        |
        <a href="{{ route('courses.index') }}">Courses</a>
    </nav>

    <hr>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>

    <hr>

    <footer>
        <p>Student Management System</p>
    </footer>

</body>
</html>
