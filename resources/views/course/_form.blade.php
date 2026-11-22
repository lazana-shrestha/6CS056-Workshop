@php
    $course = $course ?? null;
@endphp

<form action="{{ $course ? route('courses.update', $course) : route('courses.store') }}"
      method="POST">
    @csrf

    @if ($course)
        @method('PUT')
    @endif

    <div>
        <label>Course Name:</label>
        <input type="text" name="name" value="{{ old('name', $course?->name) }}">
        @error('name') <p>{{ $message }}</p> @enderror
    </div>
    <br>

    <div>
        <label>Description:</label>
        <textarea name="description">{{ old('description', $course?->description) }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror
    </div>
    <br>

    <div>
        <label>Duration (weeks):</label>
        <input type="number" name="duration" value="{{ old('duration', $course?->duration) }}">
        @error('duration') <p>{{ $message }}</p> @enderror
    </div>
    <br>

    <div>
        <label>Fee:</label>
        <input type="number" step="0.01" name="fee" value="{{ old('fee', $course?->fee) }}">
        @error('fee') <p>{{ $message }}</p> @enderror
    </div>
    <br>

    <div>
        <label>Difficulty:</label>
        <select name="difficulty">
            <option value="">Select difficulty</option>
            @foreach (['Easy', 'Medium', 'Hard'] as $level)
                <option value="{{ $level }}" @selected(old('difficulty', $course?->difficulty) === $level)>
                    {{ $level }}
                </option>
            @endforeach
        </select>
        @error('difficulty') <p>{{ $message }}</p> @enderror
    </div>
    <br>

    <div>
        <label>
            <input type="checkbox" name="is_active" value="1"
                @checked(old('is_active', $course?->is_active ?? true))>
            Active
        </label>
    </div>
    <br>

    <button type="submit">
        {{ $course ? 'Update Course' : 'Create Course' }}
    </button>
</form>