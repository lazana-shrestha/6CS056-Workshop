@props(['student' => null])

<form action="{{ $student ? route('students.update', $student) : route('students.store') }}"
      method="POST">

    @csrf

    @if ($student)
        @method('PUT')
    @endif

    <div>
        <label>Name:</label>
        <input type="text"
               name="name"
               value="{{ old('name', $student?->name) }}">

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Email:</label>
        <input type="email"
               name="email"
               value="{{ old('email', $student?->email) }}">

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Phone:</label>
        <input type="text"
               name="phone"
               value="{{ old('phone', $student?->phone) }}">

        @error('phone')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Address:</label>
        <textarea name="address">{{ old('address', $student?->address) }}</textarea>

        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Date of Birth:</label>
        <input type="date"
               name="date_of_birth"
               value="{{ old('date_of_birth', $student?->date_of_birth) }}">

        @error('date_of_birth')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>

    <button type="submit">
        {{ $student ? 'Update Student' : 'Create Student' }}
    </button>

</form>