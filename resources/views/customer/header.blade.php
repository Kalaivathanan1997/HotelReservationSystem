@php
$segment = Request::segment(1);
$segment1 = Request::segment(2);
$segment2 = Request::segment(3);
@endphp
<!doctype html>
<html lang="en">
<head>
    <title>SUMMER HOTEL Delvatore Bootstrap 4 theme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
        <!-- bootstrap version v4.0.0 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css -->
        <link href="{{ asset('Customer/css/custom.css')}}" rel="stylesheet">
        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

        
    <link href="{{ asset('customers/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/superslides.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/smoothness/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('customers/css/style.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- <link rel="stylesheet" href="{{ asset('Adminlte/dist/css/adminlte.min.css')}}"> -->

<!-- jQuery v3.4.1 -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<!-- bootstrap js -->


<script src="{{ asset('customers/js/jquery.min.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="{{ asset('customers/js/superfish.js') }}"></script>
<script src="{{ asset('customers/js/jquery.superslides.js') }}"></script>
<script src="{{ asset('customers/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('customers/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('customers/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('customers/js/select2.js') }}"></script>
<script src="{{ asset('customers/js/jquery-ui.js') }}"></script>
<script src="{{ asset('customers/js/owl.carousel.js') }}"></script>
<script src="{{ asset('customers/js/slick.js') }}"></script>
<script src="{{ asset('customers/js/jquery.appear.js') }}"></script>

<script src="{{ asset('customers/js/popper.min.js') }}"></script>
<!-- <script src="{{ asset('customers/js/bootstrap.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" ></script>

<script src="{{ asset('customers/js/scripts.js') }}"></script>

<script src="{{ asset('Adminlte/dist/js/adminlte.js')}}"></script>


    </head>
<!-- <body class="not-front page-reservation"> -->
<body class="front" data-spy="scroll" data-target="#top-inner" data-offset="0">
<div id="main">
    <div class="search-wrapper">
        <div class="container">
            <div class="search-inner clearfix">
                <div class="search-field">
                    <input type="text" class="form-control" value="" placeholder="Enter Your Search...">
                </div>
                <a href="#" class="search-btn search-close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="top-wrapper  {{ $segment == 'customerviews' ? 'top-wrapper-dark' : '' }} ">
        <div class="top-inner" id="top-inner">
            <div class="top1-wrapper">
                <div class="container">
                    <div class="top1 clearfix">
                        <div class="currency dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownCurrency2"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sri  Rs 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownCurrency2">
                                <a class="dropdown-item" href="#">Sri Lanka Rs</a>
                                <!-- <a class="dropdown-item" href="#">US DOLLAR</a>
                                <a class="dropdown-item" href="#">POUND STERLING</a>
                                <a class="dropdown-item" href="#">GEORGIAN LARI</a> -->
                            </div>
                        </div>
                        <div class="language dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage2"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('customers/images/flag1.jpg')}}" alt="" class="img-fluid">English (UK)
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownLanguage2">
                                <a class="dropdown-item" href="" ><img src="images/flag1.jpg" alt="" class="img-fluid">English
                                    (UK)</a>
                                <!-- <a class="dropdown-item" href="#"><img src="{{ asset('customers/images/flag3.jpg')}}" alt="" class="img-fluid">German</a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('customers/images/flag5.jpg')}}" alt="" class="img-fluid">Georgian</a>
                                <a class="dropdown-item" href="#"><img src="{{ asset('customers/images/flag4.jpg')}}" alt="" class="img-fluid">Russian</a> -->

                            </div>
                        </div>
                        <a href="#" class="search-btn search-open"><i class="fa fa-search"></i></a>
                        <div class="social-wrapper">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        @if(Session::get('CustomerName') == null) 
                        <div class="account dropdown">
                            <a class="dropdown-toggle" href="#" data-target="#loginModal1" role="button"
                               data-toggle="modal" aria-haspopup="true" aria-expanded="false">
                                Sign in
                                <i class="fa fa-trash-alt"> </i>
                            </a>
                          
                        </div>
                        @endif
                        @if(Session::get('CustomerName') != null) 
                        <div class="account dropdown">

                            <a class="dropdown-toggle" href="#" role="button" id="dropdownAccount"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('customers/images/my-account.jpg')}}" alt="" class="img-fluid">{{ Session::get('CustomerName') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAccount2">
                                <a class="dropdown-item" href="{{route('CustomerRoomBooking.get', Session::get('CustomerId'))}}">Booking Details</a>
                                <a class="dropdown-item logout" id="logout" >SIGN OUT</a>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="top2-wrapper">
                <div class="container">
                    <div class="top2 clearfix">
                        <header>
                            <div class="logo_wrapper">
                                <a href="index.html" class="logo">
                                    <img src="{{ asset('customers/images/logo-white.png')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </header>
                        <nav class="navbar_ navbar navbar-expand-md clearfix">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                <ul class="nav navbar-nav sf-menu clearfix">
                                <li class="nav-item"><a href="{{route('customerviews.index')}}" class="nav-link">Home</a></li>
                                    <!-- <li class="nav-item sub-menu sub-menu-1">
                                        <a href="{{route('customerviews.index')}}" class="active nav-link">Home <i class="fa fa-angle-down"
                                                                                    aria-hidden="true"></i></a>
                                        <div class="sf-mega">
                                            <ul>

                                                <li><a href="index-1.html">Winter Hotel</a></li>
                                                <li><a href="index.html">Summer Hotel</a></li>
                                                <li><a href="delvatore-fixed/index.html">Fixed Menu Style</a></li>
                                                <li><a href="index.html">Scrolled Menu Style</a></li>


                                            </ul>
                                        </div>
                                    </li> -->
                                   
                                    <li class="nav-item"><a href="{{url('customerview/rooms')}}" class="nav-link">Our Rooms</a></li>
                                    <!-- <li class="nav-item sub-menu sub-menu-2"> <a href="#" class="nav-link">Pages <i class="fa fa-angle-down"  aria-hidden="true"></i></a> -->
                                        <!-- <div class="sf-mega">
                                            <ul>

                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="reservation.html">Reservation</a></li>
                                                <li><a href="details.html">Room Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>


                                            </ul>
                                        </div> 
                                    </li>-->
                                    <!-- <li class="nav-item sub-menu sub-menu-2">
                                        <a href="#" class="nav-link">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="sf-mega">
                                            <ul>

                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="post.html">Blog Post</a></li>

                                            </ul>
                                        </div>
                                    </li> -->
                                    <li class="nav-item"><a href="{{url('customerview/about')}}" class="nav-link">About us</a></li>
                                    <li class="nav-item"><a href="{{url('customerview/contact')}}" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div> 
    </div>