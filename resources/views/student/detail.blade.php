@extends('layouts.app')

@section('title', 'Student Details')

@section('content')

<h1>Student Details</h1>

<div>

    <p>
        <strong>ID:</strong>
        {{ $student->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $student->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $student->email }}
    </p>

    <p>
        <strong>Phone:</strong>
        {{ $student->phone }}
    </p>

    <p>
        <strong>Address:</strong>
        {{ $student->address ?? 'Not provided' }}
    </p>

    <p>
        <strong>Date of Birth:</strong>
        {{ $student->date_of_birth ?? 'Not provided' }}
    </p>

</div>

<hr>

<a href="{{ route('students.edit', $student) }}">
    Edit Student
</a>

|

<a href="{{ route('students.index') }}">
    Back to Students
</a>

@endsection