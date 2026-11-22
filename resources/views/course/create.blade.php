@extends('layouts.app')

@section('title', 'Create Course')

@section('content')
<h1>Create New Course</h1>

@include('course._form')

<br>
<a href="{{ route('courses.index') }}">Back to Courses</a>
@endsection