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
                        <div class="card-header">{{ __('Horses') }}</div>
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
                                            <h3 class="mb-3">Horses</h3>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2"
                                                role="button" data-slide="prev"
                                                style="background-color: #454545; border-color: #454545;">
                                                <i class="fa fa-arrow-left"></i>
                                            </a>
                                            <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2"
                                                role="button" data-slide="next"
                                                style="background-color: #454545; border-color: #454545;">
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <div id="carouselExampleIndicators2" class="carousel slide"
                                                data-ride="carousel">

                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1563787765695-df0b1878d9a0?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Valentina<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">8
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Valentina, known for her sleek
                                                                            ebony coat, possesses remarkable agility and
                                                                            intellect in various equestrian disciplines.</p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Advanced</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1512397476661-a9ec6ffd4a93?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Gemini<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">4
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Gemini, with his warm chestnut
                                                                            hue, embodies a gentle and trainable nature
                                                                            ideal for novice riders with not much
                                                                            experience.</p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Beginner</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1553284966-19b8815c7817?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Tempest<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">12
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Tempest, exudes elegance and a
                                                                            calm temperament, making her an ideal choice for
                                                                            those new to equestrian pursuits.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Beginner</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1639570830431-6c2d0100d37b?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Beauty<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">8
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Beauty, combines strength and
                                                                            grace, making him a suitable partner for riders
                                                                            advancing in their equestrian skills.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Intermediate</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1527246736961-a2b8a8c4a02b?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Henry<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">6
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Henry, with his compact size
                                                                            and friendly demeanor, provides a introduction
                                                                            to the world of horse riding for beginners.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Beginner</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1505436815265-8aa69d67f2e4?q=80&w=1172&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Angel<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">5
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Angel, showcases a unique and
                                                                            eye-catching appearance, embodying both elegance
                                                                            and individuality in her equine charm.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Intermediate</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://plus.unsplash.com/premium_photo-1669047983423-4939744858ee?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Magic<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">2
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Magic, specifically chosen for
                                                                            his gentle demeanor, provides a delightful and
                                                                            safe introduction to horseback riding for
                                                                            children.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Beginner</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1544836617-96e440cbb385?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Jenny<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">11
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Jenny, with the richness of
                                                                            deep brown hues, embodies a captivating and
                                                                            unique presence in the equestrian world.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Advanced</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1513966007261-5a86a5284471?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Kane<small
                                                                                class="text-muted"
                                                                                style="font-size: 80%; margin-left: 5px;">13
                                                                                yrs</small>
                                                                        </h4>
                                                                        <p class="card-text">Kane, with his silvery coat,
                                                                            is a favorite for riders seeking a companion
                                                                            with a regal presence and adaptable skills.
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-15">
                                                                                <button class="btn btn-primary btn-block"
                                                                                    style="background-color: #454545; border-color: #454545;">Advanced</button>
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