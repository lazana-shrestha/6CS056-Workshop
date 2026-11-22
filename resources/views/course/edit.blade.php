@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<h1>Edit Course</h1>

@include('course._form', ['course' => $course])

<br>
<a href="{{ route('courses.index') }}">Cancel</a>
@endsection