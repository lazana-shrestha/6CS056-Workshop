<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h1>Edit Student</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.update', $student->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $student->name) }}">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email', $student->email) }}">

    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">

    <br><br>

    <label>Address:</label>
    <textarea name="address">{{ old('address', $student->address) }}</textarea>

    <br><br>

    <label>Date of Birth:</label>
    <input type="date"
           name="date_of_birth"
           value="{{ old('date_of_birth', $student->date_of_birth) }}">

    <br><br>

    <button type="submit">Update Student</button>

</form>

<a href="{{ route('students.index') }}">Cancel</a>

</body>
</html>