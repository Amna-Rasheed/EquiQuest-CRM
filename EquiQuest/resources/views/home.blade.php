@extends('layouts.pages')

@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .text-box {
                flex: 1;
                border: 1px solid #454545;
                border-radius: 8px;
                padding: 20px;
                background-color: #f9f9f9;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .text-box p{
                font-size: 20px;
            }
            .daily {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /* Two columns of equal width */
                grid-gap: 20px;
                /* Spacing between each column */

            }

            .card {
                border: 2.3px solid #454545;
                border-radius: 7.5px;
            }

            .card-header {
                background-color: #454545;
                color: white;
            }

            .clearfix::after,
            .calendar ol::after {
                content: ".";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }

            /* ================
                    Calendar Styling */
            .calendar {
                border-radius: 10px;
            }

            .month {
                font-size: 2rem;
            }

            @media (min-width: 992px) {
                .month {
                    font-size: 3.5rem;
                }
            }

            .calendar ol li {
                float: left;
                width: 14.28571%;
            }

            .calendar .day-names {
                border-bottom: 1px solid #eee;
            }

            .calendar .day-names li {
                text-transform: uppercase;
                margin-bottom: 0.5rem;
            }

            .calendar .days li {
                border-bottom: 1px solid #eee;
                min-height: 8rem;
            }

            .calendar .days li .date {
                margin: 0.5rem 0;
            }

            .calendar .days li .event {
                font-size: 0.75rem;
                padding: 0.4rem;
                color: white;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                border-radius: 4rem;
                margin-bottom: 1px;
            }

            .calendar .days li .event.span-2 {
                width: 200%;
            }

            .calendar .days li .event.begin {
                border-radius: 1rem 0 0 1rem;
            }

            .calendar .days li .event.end {
                border-radius: 0 1rem 1rem 0;
            }

            .calendar .days li .event.clear {
                background: none;
            }

            .calendar .days li:nth-child(n+29) {
                border-bottom: none;
            }

            .calendar .days li.outside .date {
                color: #ddd;
            }

            body {
                min-height: 100vh;
                background-color: #3ca55c;
                background-image: linear-gradient(147deg, #3ca55c 0%, #b5ac49 100%);
            }

            .footer-basic {
                padding: 40px 0;
                background-color: #ffffff;
                color: #4b4c4d;
            }

            .footer-basic ul {
                padding: 0;
                list-style: none;
                text-align: center;
                font-size: 18px;
                line-height: 1.6;
                margin-bottom: 0;
            }

            .footer-basic li {
                padding: 0 10px;
            }

            .footer-basic ul a {
                color: inherit;
                text-decoration: none;
                opacity: 0.8;
            }

            .footer-basic ul a:hover {
                opacity: 1;
            }

            .footer-basic .social {
                text-align: center;
                padding-bottom: 25px;
            }

            .footer-basic .social>a {
                font-size: 24px;
                width: 40px;
                height: 40px;
                line-height: 40px;
                display: inline-block;
                text-align: center;
                border-radius: 50%;
                border: 1px solid #ccc;
                margin: 0 8px;
                color: inherit;
                opacity: 0.75;
            }

            .footer-basic .social>a:hover {
                opacity: 0.9;
            }

            .footer-basic .copyright {
                margin-top: 15px;
                text-align: center;
                font-size: 13px;
                color: #aaa;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Daily Overview') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <div class="daily">
                                <div class="text-box">

                                    <h2><i class="fa fa-calendar mr-1"></i> Monthly health check up</h2>
                                    
                                    <p>10:30</p>
                                </div>

                                <div class="text-box">

                                    <h2><i class="fa fa-user mr-1"></i> Staff meeting</h2>
                                    <p>13:00</p>

                                </div>

                                <div class="text-box">

                                    <h2><i class="fa fa-square-check mr-1"></i> Confirm participation in show</h2>
                                    <p>14:30</p>
                                </div>

                                <div class="text-box">

                                    <h2><i class="fa fa-tools mr-1"></i> Replace missing tiles in roof</h2>
                                    <p>17:00</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 20px;">
                    <div class="card md-2">
                        <div class="card-header">{{ __('Monthly events') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <div class="calendar shadow bg-white p-5">
                                <div class="d-flex align-items-center py-4">
                                    <h2 class="month font-weight-bold mb-0 text-uppercase">September 2023</h2>
                                </div>
                                {{-- <p class="font-italic text-muted mb-5">No events for this day.</p> --}}
                                <ol class="day-names list-unstyled">
                                    <li class="font-weight-bold text-uppercase">Sun</li>
                                    <li class="font-weight-bold text-uppercase">Mon</li>
                                    <li class="font-weight-bold text-uppercase">Tue</li>
                                    <li class="font-weight-bold text-uppercase">Wed</li>
                                    <li class="font-weight-bold text-uppercase">Thu</li>
                                    <li class="font-weight-bold text-uppercase">Fri</li>
                                    <li class="font-weight-bold text-uppercase">Sat</li>
                                </ol>

                                <ol class="days list-unstyled">
                                    <li class="outside">
                                        <div class="date">27</div>
                                    </li>
                                    <li class="outside">
                                        <div class="date">28</div>
                                    </li>
                                    <li class="outside">
                                        <div class="date">29</div>
                                    </li>
                                    <li class="outside">
                                        <div class="date">30</div>
                                    </li>
                                    <li class="outside">
                                        <div class="date">31</div>
                                    </li>
                                    <li>
                                        <div class="date">1</div>
                                    </li>
                                    <li>
                                        <div class="date">2</div>
                                    </li>
                                    <li>
                                        <div class="date">3</div>
                                    </li>
                                    <li>
                                        <div class="date">4</div>
                                    </li>
                                    <li>
                                        <div class="date">5</div>
                                    </li>
                                    <li>
                                        <div class="date">6</div>
                                    </li>
                                    <li>
                                        <div class="date">7</div>
                                    </li>
                                    <li>
                                        <div class="date">8</div>
                                        <div class="event bg-primary">Meeting</div>
                                        <div class="event bg-primary">Monthly health checkup</div>
                                    </li>
                                    <li>
                                        <div class="date">9</div>
                                    </li>
                                    <li>
                                        <div class="date">10</div>
                                        <div class="event bg-success">Riding Lesson</div>
                                    </li>
                                    <li>
                                        <div class="date">11</div>
                                        <div class="event bg-success">Riding Lesson</div>
                                    </li>
                                    <li>
                                        <div class="date">12</div>
                                    </li>
                                    <li>
                                        <div class="date">13</div>
                                        <div class="event bg-success">Riding Lesson</div>
                                    </li>
                                    <li>
                                        <div class="date">14</div>
                                    </li>
                                    <li>
                                        <div class="date">15</div>
                                    </li>
                                    <li>
                                        <div class="date">16</div>
                                        <div class="event bg-success">Riding Workshop</div>
                                    </li>
                                    <li>
                                        <div class="date">17</div>
                                    </li>
                                    <li>
                                        <div class="date">18</div>
                                    </li>
                                    <li>
                                        <div class="date">19</div>
                                        <div class="event bg-success">Riding Lesson</div>
                                    </li>
                                    <li>
                                        <div class="date">20</div>
                                    </li>
                                    <li>
                                        <div class="date">21</div>
                                        <div class="event bg-success">Riding Lesson</div>
                                    </li>
                                    <li>
                                        <div class="date">22</div>
                                    </li>
                                    <li>
                                        <div class="date">23</div>
                                    </li>
                                    <li>
                                        <div class="date">24</div>
                                    </li>
                                    <li>
                                        <div class="date">25</div>
                                    </li>
                                    <li>
                                        <div class="date">26</div>
                                    </li>
                                    <li>
                                        <div class="date">27</div>
                                    </li>
                                    <li>
                                        <div class="date">28</div>
                                    </li>
                                    <li>
                                        <div class="date">29</div>
                                        <div class="event bg-success">Insurance Renewal</div>
                                    </li>
                                    <li>
                                        <div class="date">30</div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="card md-2" style="height: 325px">
                        <div class="card-header">{{ __('Statistics') }}</div>

                        <div class="card-body d-flex justify-content-around align-items-center">
                            
                            <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-horse-head" style="font-size: 64px"></i>
                                    <p class="card-text fs-2">25 Horses</p>
                                </div>
                            </div>
                            <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-file-lines" style="font-size: 64px"></i>
                                    <p class="card-text fs-2">42 Bookings/Month</p>
                                </div>
                            </div>
                            <div class="card border-0  rounded-xl" style="width: 20rem; ">
                                <div class="card-body text-center">
                                    <i class="fa-solid fa-dollar-sign" style="font-size: 64px"></i>
                                    <p class="card-text fs-2">$1,500 Revenue</p>
                                </div>
                            </div>
                            
                            
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
    </body>

    </html>
@endsection
