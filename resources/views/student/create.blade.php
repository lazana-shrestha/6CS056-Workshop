@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

<h1>Create New Student</h1>

<x-student-form />

<br>

<a href="{{ route('students.index') }}">
    Back to Students
</a>

@endsection