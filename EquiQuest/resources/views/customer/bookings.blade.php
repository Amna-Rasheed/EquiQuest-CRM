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
                        <div class="card-header">{{ __('Bookings') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <section class="mb-4">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h2 class="mb-2">Book a Lesson</h2>
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ asset('images/30-minute-lesson.avif') }}" class="card-img-top"
                                                alt="30 Minutes Lesson Image">
                                            <div class="card-body">
                                                <h5 class="card-title">30 Minutes Lesson</h5>
                                                <p class="card-text">Rider: Child</p>
                                                <p class="card-text">Price: LKR 5,000</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                                                    data-target="#bookingModal30child">Book Now</a>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="bookingModal30child" tabindex="-1" role="dialog"
                                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bookingModalLabel">Booking Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('submitBooking') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="date">Date:</label>
                                                                <input type="date" class="form-control" id="date"
                                                                    name="date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="time">Time:</label>
                                                                <select class="form-control" id="time" name="time"
                                                                    required>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Your Name:</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" required value="{{ $userName }}">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="price">Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="price" name="price" value="5000">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="type">Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="type" name="type"
                                                                        value="30 Minutes Lesson">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="rider">Rider:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="rider" name="rider" value="Child">
                                                                </div>
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ auth()->user()->id }}">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Confirm
                                                                Booking</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ asset('images/30-minute-lesson.avif') }}" class="card-img-top"
                                                alt="30 Minutes Lesson Image">
                                            <div class="card-body">
                                                <h5 class="card-title">30 Minutes Lesson</h5>
                                                <p class="card-text">Rider: Adult</p>
                                                <p class="card-text">Price: LKR 7,500</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                                                    data-target="#bookingModal30adult">Book Now</a>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="bookingModal30adult" tabindex="-1" role="dialog"
                                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bookingModalLabel">Booking Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('submitBooking') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="date">Date:</label>
                                                                <input type="date" class="form-control" id="date"
                                                                    name="date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="time">Time:</label>
                                                                <select class="form-control" id="time"
                                                                    name="time" required>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Your Name:</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" required value="{{ $userName }}">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="price">Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="price" name="price" value="7500">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="type">Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="type" name="type"
                                                                        value="30 Minutes Lesson">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="rider">Rider:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="rider" name="rider" value="Adult">
                                                                </div>
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ auth()->user()->id }}">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Confirm
                                                                Booking</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ asset('images/60-minute-lesson.avif') }}" class="card-img-top"
                                                alt="60 Minutes Lesson Image">
                                            <div class="card-body">
                                                <h5 class="card-title">60 Minutes Lesson</h5>
                                                <p class="card-text">Rider: Child</p>
                                                <p class="card-text">Price: LKR 10,000</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                                                    data-target="#bookingModal60child">Book Now</a>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="bookingModal60child" tabindex="-1" role="dialog"
                                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bookingModalLabel">Booking Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('submitBooking') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="date">Date:</label>
                                                                <input type="date" class="form-control" id="date"
                                                                    name="date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="time">Time:</label>
                                                                <select class="form-control" id="time"
                                                                    name="time" required>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Your Name:</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" required value="{{ $userName }}">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="price">Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="price" name="price" value="10000">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="type">Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="type" name="type"
                                                                        value="60 Minutes Lesson">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="rider">Rider:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="rider" name="rider" value="Child">
                                                                </div>
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ auth()->user()->id }}">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Confirm
                                                                Booking</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ asset('images/60-minute-lesson.avif') }}" class="card-img-top"
                                                alt="60 Minutes Lesson Image">
                                            <div class="card-body">
                                                <h5 class="card-title">60 Minutes Lesson</h5>
                                                <p class="card-text">Rider: Adult</p>
                                                <p class="card-text">Price: LKR 15,000</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                                                    data-target="#bookingModal60adult">Book Now</a>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="bookingModal60adult" tabindex="-1" role="dialog"
                                            aria-labelledby="bookingModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="bookingModalLabel">Booking Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('submitBooking') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="date">Date:</label>
                                                                <input type="date" class="form-control" id="date"
                                                                    name="date" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="time">Time:</label>
                                                                <select class="form-control" id="time"
                                                                    name="time" required>
                                                                    <option value="09:00">09:00</option>
                                                                    <option value="10:00">10:00</option>
                                                                    <option value="11:00">11:00</option>
                                                                    <option value="12:00">12:00</option>
                                                                    <option value="13:00">13:00</option>
                                                                    <option value="14:00">14:00</option>
                                                                    <option value="15:00">15:00</option>
                                                                    <option value="16:00">16:00</option>
                                                                    <option value="17:00">17:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Your Name:</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" required value="{{ $userName }}">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="price">Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="price" name="price" value="15000">
                                                                </div>
                                                                <div class="form-group col-md-5">
                                                                    <label for="type">Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="type" name="type"
                                                                        value="60 Minutes Lesson">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="rider">Rider:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="rider" name="rider" value="Adult">
                                                                </div>
                                                                <input type="hidden" name="user_id"
                                                                    value="{{ auth()->user()->id }}">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Confirm
                                                                Booking</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="mb-4">
                                <h2>Your Recent Bookings</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Booking ID</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Rider</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <th scope="row">{{ $booking->id }}</th>
                                                <td>{{ $booking->date }}</td>
                                                <td>{{ $booking->time }}</td>
                                                <td>{{ $booking->type }}</td>
                                                <td>{{ $booking->rider }}</td>
                                                <td>{{ $booking->price }}</td>
                                                <td>{{ $booking->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </section>
                            <section class="mb-4">
                                <h2 class="mb-2">Lesson Plans</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Lessons</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Reserve Now</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Child Plans -->
                                                <tr>
                                                    <td>1</td>
                                                    <td>Child</td>
                                                    <td>5</td>
                                                    <td>LKR 50,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Child</td>
                                                    <td>10</td>
                                                    <td>LKR 95,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Child</td>
                                                    <td>25</td>
                                                    <td>LKR 180,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Child</td>
                                                    <td>50</td>
                                                    <td>LKR 350,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <!-- Adult Plans -->
                                                <tr>
                                                    <td>5</td>
                                                    <td>Adult</td>
                                                    <td>5</td>
                                                    <td>LKR 70,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Adult</td>
                                                    <td>10</td>
                                                    <td>LKR 140,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Adult</td>
                                                    <td>25</td>
                                                    <td>LKR 250,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Adult</td>
                                                    <td>50</td>
                                                    <td>LKR 450,000</td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">Reserve Now</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
