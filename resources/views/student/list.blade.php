<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h1>Students</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('students.create') }}">Create Student</a>

<hr>

@forelse ($students as $student)

    <div>
        <h2>{{ $student->name }}</h2>

        <p>Email: {{ $student->email }}</p>
        <p>Phone: {{ $student->phone }}</p>

        <a href="{{ route('students.show', $student->id) }}">
            View
        </a>

        <a href="{{ route('students.edit', $student->id) }}">
            Edit
        </a>

        <form action="{{ route('students.destroy', $student->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    </div>

    <hr>

@empty

    <p>No students found.</p>

@endforelse

</body>
</html>