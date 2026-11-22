@extends('layouts.app')

@section('title', 'Students')

@section('content')

<h1>Student List</h1>

<a href="{{ route('students.create') }}">+ Add New Student</a>

<hr>

@if ($students->count() > 0)

    @foreach ($students as $student)

        <div>
            <h2>{{ $student->name }}</h2>

            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Phone:</strong> {{ $student->phone }}</p>

            <a href="{{ route('students.show', $student) }}">
                View Details
            </a>

            |

            <a href="{{ route('students.edit', $student) }}">
                Edit
            </a>

            |

            <form action="{{ route('students.destroy', $student) }}"
                  method="POST"
                  style="display: inline;">

                @csrf
                @method('DELETE')

                <button type="submit"
                    onclick="return confirm('Are you sure you want to delete this student?')">
                    Delete
                </button>

            </form>
        </div>

        <hr>

    @endforeach

@else

    <p>No students found.</p>

@endif

@endsection