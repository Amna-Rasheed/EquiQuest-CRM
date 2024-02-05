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
            .card {
                height: 90%;
            }

            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Events') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <section class="pt-4 pb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mb-3">Upcoming Events</h3>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2"
                                                role="button" data-slide="prev"> <i class="fa fa-arrow-left"></i>
                                            </a>
                                            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2"
                                                role="button" data-slide="next"> <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <div id="carouselExampleIndicators2" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner">

                                                    <div class="carousel-item active">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 1"
                                                                        src="{{ asset('images/Event-1.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">EquiFest Extravaganza<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Join us for an equestrian
                                                                            spectacle featuring thrilling performances
                                                                            and
                                                                            dazzling displays of horsemanship.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 2"
                                                                        src="{{ asset('images/Event-2.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Canter & Colors Show<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Experience the magic of horses
                                                                            and artistry at our vibrant Canter &
                                                                            Colors Show, where horses paint masterpieces
                                                                            with their hooves.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 3"
                                                                        src="{{ asset('images/Event-3.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Trotting Trident
                                                                            Challenge<small class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Test your riding skills in the
                                                                            Galloping Gauntlet Challenge, an obstacle course
                                                                            that showcases the agility and bond between
                                                                            riders and their horses.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 4"
                                                                        src="{{ asset('images/Event-4.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Twilight Trail Trek<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Embark on a Twilight Trail
                                                                            Trek, a serene evening ride through scenic
                                                                            trails, surrounded by nature's beauty and the
                                                                            soothing sounds of hoofbeats.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 5"
                                                                        src="{{ asset('images/Event-5.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Jumping Jamboree<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Cheer on talented riders and
                                                                            their agile mounts at the Jumping Jamboree, a
                                                                            high-energy event showcasing the art of show
                                                                            jumping.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img class="img-fluid h-50" alt="Event 6"
                                                                        src="{{ asset('images/Event-6.avif') }}">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Equine Elegance Parade<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">Open</small>
                                                                        </h4>
                                                                        <p class="card-text">Witness the grace and elegance
                                                                            of majestic horses in the Equine Elegance
                                                                            Parade, a procession of regal equine beauty and
                                                                            refined horsemanship.</p>
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <h6 class="text-right">Contact: 123 456 7890</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
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
