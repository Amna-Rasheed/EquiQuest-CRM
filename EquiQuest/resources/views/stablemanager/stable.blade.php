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
                    <div class="card my-2">
                        <div class="card-header">{{ __('Cleaning Schedule') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Morning Clean Up</th>
                                        <th scope="col">Evening Clean Up</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">09/02</th>
                                        <td>Raj</td>
                                        <td>George</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10/02</th>
                                        <td>Vishnu</td>
                                        <td>Malik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11/02</th>
                                        <td>Althaf</td>
                                        <td>Raj</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12/02</th>
                                        <td>Vishnu</td>
                                        <td>John</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13/02</th>
                                        <td>George</td>
                                        <td>Malik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14/02</th>
                                        <td>Vishnu</td>
                                        <td>Althaf</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15/02</th>
                                        <td>George</td>
                                        <td>John</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card my-3">
                        <div class="card-header">{{ __('Inventory') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-body d-flex justify-content-around align-items-center">

                                <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-horse-head" style="font-size: 64px"></i>
                                        <p class="card-text fs-2">25 Horse Feed</p>
                                    </div>
                                </div>
                                <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-toolbox" style="font-size: 64px"></i>
                                        <p class="card-text fs-2">30 Equipment</p>
                                    </div>
                                </div>
                                <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-file-lines" style="font-size: 64px"></i>
                                        <p class="card-text fs-2">15 Reorders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <div class="card-header">{{ __('Facility Check') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <ul class="nav nav-tabs" id="facilityTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="safetyChecks-tab" data-bs-toggle="tab"
                                        href="#safetyChecks" role="tab" aria-controls="safetyChecks"
                                        aria-selected="true">Safety Checks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="repairMaintenance-tab" data-bs-toggle="tab"
                                        href="#repairMaintenance" role="tab" aria-controls="repairMaintenance"
                                        aria-selected="false">Repair/Maintenance</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="safetyChecks" role="tabpanel"
                                    aria-labelledby="safetyChecks-tab">
                                    <h5>Safety Checks</h5>
                                    <p>Regular safety checks are essential to ensure the well-being of the horses and
                                        maintain a secure environment. Here are some key safety checks:</p>
                                    <ul>
                                        <li>Inspect and repair any damaged fencing to prevent escapes.</li>
                                        <li>Check stall doors and latches for proper functioning.</li>
                                        <li>Ensure that fire extinguishers are in place and functional.</li>
                                        <li>Inspect and clean horse-friendly lighting in common areas.</li>
                                        <li>Regularly examine and maintain emergency exits.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="repairMaintenance" role="tabpanel"
                                    aria-labelledby="repairMaintenance-tab">
                                    <h5>Repair/Maintenance</h5>
                                    <p>Timely repair and maintenance tasks contribute to the longevity of the facilities and
                                        the safety of the horses. Here are some repair and maintenance guidelines:</p>
                                    <ul>
                                        <li>Regularly inspect and repair any damaged stalls or structures.</li>
                                        <li>Check and replace worn-out equipment such as halters and leads.</li>
                                        <li>Perform routine maintenance on water buckets and automatic waterers.</li>
                                        <li>Inspect and repair stable flooring for safety and comfort.</li>
                                        <li>Ensure that all grooming supplies and first aid kit items are up-to-date.</li>
                                    </ul>
                                </div>
                            </div>
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
