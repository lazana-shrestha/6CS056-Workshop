<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/students/create', function () {
    return view('student.create');
})->name('students.create');


// Store a new student
Route::post('/students', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    Student::create($validated);

    return redirect()
        ->route('students.index')
        ->with('success', 'Student created successfully!');

})->name('students.store');


// Display all students
Route::get('/students', function () {

    $students = Student::all();

    return view('student.list', compact('students'));

})->name('students.index');


// Display one student's details
Route::get('/students/{id}', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.detail', compact('student'));

})->name('students.show');


// Show the edit form
Route::get('/students/{id}/edit', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.edit', compact('student'));

})->name('students.edit');


// Update an existing student
Route::put('/students/{id}', function (Request $request, $id) {

    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:students,email,' . $id,
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    $student->update($validated);

    return redirect()
        ->route('students.index')
        ->with('success', 'Student updated successfully!');

})->name('students.update');


// Delete a student
Route::delete('/students/{id}', function ($id) {

    $student = Student::findOrFail($id);

    $student->delete();

    return redirect()
        ->route('students.index')
        ->with('success', 'Student deleted successfully!');

})->name('students.destroy');