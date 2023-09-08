@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="text-center">
                <img src="{{ asset('images/logo.png') }}" alt="logo" height="350" style="margin-right: 10px;">
                <!-- Paragraph about the app -->
                <p style="color: #000000;" class="mb-4 fs-2">Welcome to EquiQuest, your stable management app.</p>
                <!-- Get Started Button -->
                <a href="{{ route('register') }}" class="btn btn-primary" style="background-color: #454545;border: 1px solid #454545;">Get Started</a>
            </div>
        </div>
</div>
@endsection
