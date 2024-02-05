@extends('layouts.pages')

@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>

        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Vets and Suppliers') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
        <div class="card-body">
            <h1>Vets</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date of Next Visit</th>
                        <!-- Add other fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vetData as $vet)
                        <tr>
                            <td>{{ $vet->name }}</td>
                            <td>{{ $vet->phone_number }}</td>
                            <td>{{ $vet->email }}</td>
                            <td>{{ $vet->next_visit_date }}</td>
                            <!-- Add other fields as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Supplier Table -->
    
        <div class="card-body">
            <h1>Suppliers</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date of Next Visit</th>
                        <!-- Add other fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supplierData as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->phone_number }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->next_visit_date }}</td>
                            <!-- Add other fields as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <div class="footer-basic">
                <footer>
                    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-facebook"></i></a></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#">Services</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="copyright">EquiQuest © 2023</p>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
