@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<h1>Edit Student</h1>

<x-student-form :student="$student" />

<br>

<a href="{{ route('students.index') }}">
    Cancel
</a>

@endsection