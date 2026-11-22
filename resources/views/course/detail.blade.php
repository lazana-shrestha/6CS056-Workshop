@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
<h1>Course Details</h1>

<p><strong>ID:</strong> {{ $course->id }}</p>
<p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Description:</strong> {{ $course->description ?? 'Not provided' }}</p>
<p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
<p><strong>Fee:</strong> {{ $course->fee }}</p>
<p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
<p><strong>Status:</strong> {{ $course->is_active ? 'Active' : 'Inactive' }}</p>

<hr>

<a href="{{ route('courses.edit', $course) }}">Edit Course</a>
|
<a href="{{ route('courses.index') }}">Back to Courses</a>
@endsection