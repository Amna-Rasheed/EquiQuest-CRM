@extends('layouts.pages')

@section('content')
    <div class="container">
        <h1>Edit Horse</h1>

        <form method="POST" action="{{ route('admin.horses.update', $horse->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $horse->name }}" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $horse->age }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" class="form-control" id="breed" name="breed" value="{{ $horse->breed }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="training_status" class="form-label">Training Status</label>
                <input type="text" class="form-control" id="training_status" name="training_status"
                    value="{{ $horse->training_status }}" required>
            </div>
            <div class="mb-3">
                <label for="medical_history" class="form-label">Medical History (optional)</label>
                <textarea class="form-control" id="medical_history" name="medical_history" rows="4">{{ $horse->medical_history }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Horse</button>
        </form>
    </div>
@endsection
