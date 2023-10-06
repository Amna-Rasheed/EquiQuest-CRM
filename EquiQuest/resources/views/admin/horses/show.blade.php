@extends('layouts.pages')

@section('content')
    <div class="container">
        <h1>Horse Details</h1>

        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $horse->name }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ $horse->age }}</td>
            </tr>
            <tr>
                <th>Breed</th>
                <td>{{ $horse->breed }}</td>
            </tr>
            <tr>
                <th>Training Status</th>
                <td>{{ $horse->training_status }}</td>
            </tr>
            <tr>
                <th>Medical History</th>
                <td>{{ $horse->medical_history ?? 'N/A' }}</td>
            </tr>
        </table>

        <a href="{{ route('admin.horses.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
