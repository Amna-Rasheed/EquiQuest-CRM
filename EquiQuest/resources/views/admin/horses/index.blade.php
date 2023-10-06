@extends('layouts.pages')

@section('content')
    <div class="container">
        <h1>List of Horses</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('admin.horses.create') }}" class="btn btn-primary mb-3">Add a New Horse</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Breed</th>
                    <th>Training Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horses as $horse)
                    <tr>
                        <td>{{ $horse->name }}</td>
                        <td>{{ $horse->age }}</td>
                        <td>{{ $horse->breed }}</td>
                        <td>{{ $horse->training_status }}</td>
                        <td>
                            <a href="{{ route('admin.horses.show', $horse->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.horses.edit', $horse->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.horses.delete', $horse->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this horse?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
