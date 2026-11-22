@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<h1>Course List</h1>

<a href="{{ route('courses.create') }}">+ Add New Course</a>
<hr>

@if ($courses->count() > 0)
    @foreach ($courses as $course)
        <div>
            <h2>{{ $course->name }}</h2>
            <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
            <p><strong>Fee:</strong> {{ $course->fee }}</p>
            <p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>

            <a href="{{ route('courses.show', $course) }}">View Details</a>
            |
            <a href="{{ route('courses.edit', $course) }}">Edit</a>
            |
            <form action="{{ route('courses.destroy', $course) }}"
                  method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                    onclick="return confirm('Delete this course?')">
                    Delete
                </button>
            </form>
        </div>
        <hr>
    @endforeach
@else
    <p>No courses found.</p>
@endif
@endsection