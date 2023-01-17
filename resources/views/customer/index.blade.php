@extends('customer.master')
@section('content')

    <div id="home" class="">
        <div id="home-inner" class="home-inner">
            <div id="slides_wrapper" class="">
                <div id="slides">
                    <ul class="slides-container">
                        <li>
                            <img src="{{ asset('customers/images/slide01.jpg') }}" alt="" class="img">
                        </li>
                        <!-- <li>
                            <img src="{{ asset('customers/images/slide04.jpg') }}" alt="" class="img">
                        </li> -->
                        <li>
                            <img src="{{ asset('customers/images/slide03.jpg') }}" alt="" class="img">
                        </li>
                        <li>
                            <img src="{{ asset('customers/images/slide02.jpg') }}" alt="" class="img">
                        </li>
                        <li>
                            <img src="{{ asset('customers/images/slide05.jpg') }}" alt="" class="img">
                        </li>
                        <li>
                            <img src="{{ asset('customers/images/slide06.jpg') }}" alt="" class="img">
                        </li>

                    </ul>
                </div>
            </div>
            <div class="slide-text-wrapper">
                <div class="container">
                    <div class="slide-text clearfix">
                        <div class="img1">
                            <img src="{{ asset('customers/images/slide-logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="txt1"><span>SUMMER<i><img src="{{ asset('customers/images/slide-logo2.png') }}" alt="" class="img-fluid"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-buttons-wrapper">
                <div class="container">
                    <div class="slide-buttons clearfix">
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="{{ asset('customers/images/slide-ic1.png') }}" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">Hotel</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="{{ asset('customers/images/slide-ic2.png') }}" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">Breakfast</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="{{ asset('customers/images/slide-ic3.png') }}" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">Fitness Club</div>
                            </a>
                        </div>
                        <div class="slide-button">
                            <a href="#">
                                <div class="ic"><img src="{{ asset('customers/images/slide-ic4.png') }}" alt="" class="img-fluid"></div>
                                <div class="hr"></div>
                                <div class="txt1">Support 24/7</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-wrapper">
            <div class="container">
                <div class="booking-inner clearfix">
                    <form action="javascript:;" class="form1 clearfix">
                        <div class="col1 c1">
                            <div class="input1_wrapper">
                                <label>Check in</label>
                                <div class="input1_inner">
                                    <input type="text" class="form-control input datepicker" placeholder="Check in">
                                </div>
                            </div>
                        </div>
                        <div class="col1 c2">
                            <div class="input1_wrapper">
                                <label>Check out</label>
                                <div class="input1_inner">
                                    <input type="text" class="form-control input datepicker" placeholder="Check out">
                                </div>
                            </div>
                        </div>
                        <div class="col2 c3">
                            <div class="select1_wrapper">
                                <label>Adults</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">1 Adult</option>
                                        <option value="2">2 Adults</option>
                                        <option value="3">3 Adults</option>
                                        <option value="4">4 Adults</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col2 c4">
                            <div class="select1_wrapper">
                                <label>Children</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">Children</option>
                                        <option value="1">1 Child</option>
                                        <option value="2">2 Children</option>
                                        <option value="3">3 Children</option>
                                        <option value="4">4 Children</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col2 c5">
                            <div class="select1_wrapper">
                                <label>Rooms</label>
                                <div class="select1_inner">
                                    <select class="select2 select" style="width: 100%">
                                        <option value="1">1 Room</option>
                                        <option value="2">2 Rooms</option>
                                        <option value="3">3 Rooms</option>
                                        <option value="4">4 Rooms</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col3 c6">
                            <button type="submit" class="btn-form1-submit">CHECK AVAILABILITY</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="top-wrapper"></div>
    <div id="about">
        <div class="container">

            <div class="title1">LITTLE ABOUT US</div>
            <div class="title2">A personal tropical sanctuary that is perfect for escaping the city,</div>

            <div class="about-slider-wrapper clearfix">
                <div class="about-slider-left">
                    <figure class="about-slider-thumb">
                        <img src="{{ asset('customers/images/about00.jpg') }}" alt="" class="img-fluid">
                    </figure>
                    <div class="slider-for">
                        <div class="slider-item">
                            <img src="{{ asset('customers/images/about01.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('customers/images/about02.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('customers/images/about03.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="about-slider-right">
                    <div class="slider-nav">
                        <div class="slider-item">
                            <div class="txt1">
                            Services & Facilities.
                            </div>
                            <div class="txt2">
                                <p>
                                Shangri-La Colombo offers a full range of services and facilities, supported by an experienced and dedicated staff. If you require any service that is not listed here, please contact us and we will do our very best to accommodate your request. Facilities  Conference Facilities Facilities for the Disabled Foreign Exchange Counter Parking Facili
                                </p>
                                <p>
                                Facilities  Conference Facilities Facilities for the Disabled Foreign Exchange Counter Parking Facilities  Conference Facilities Facilities for the Disabled Foreign Exchange Counter Parking Facili
                                </p>
                            </div>
                            <div class="txt3">
                                GEORGE BAGRATION
                            </div>
                            <div class="txt4">
                                MANAGER
                            </div>
                            <div class="txt5">
                                HOTEL DELVATORE
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="txt1">
                            Explore Colombo.
                            </div>
                            <div class="txt2">
                                <p>
                                Colombo, the commercial capital of Sri Lanka, has a long history as an important port on the ancient east-west trade routes, and has been variously ruled by the Portuguese, Dutch and British.
                                </p>
                                <p>
                                That heritage is reflected in its often charming architecture and unique culture.The city.
.
                                </p>
                            </div>
                            <div class="txt3">
                                ELENE ERISTAVI
                            </div>
                            <div class="txt4">
                                STAFF MANAGER
                            </div>
                            <div class="txt5">
                                HOTEL DELVATORE
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="txt1">
                            Map & Directions.
                            </div>
                            <div class="txt2">
                                <p>
                                Summer Hotel Colombo benefits from a prime location between the Galle Face Green promenade and Beira Lake, in the heart of Colombo’s business district.It is also close to popular shopping areas and entertainment venues in the city.
                                </p>
                                <p>
                                Colombo, the commercial capital of Sri Lanka, has a long history as an important port on the ancient east-west trade routes, and has been variously ruled by the Portuguese, Dutch and British.
                                </p>
                            </div>
                            <div class="txt3">
                                DAVID ORBELIANI
                            </div>
                            <div class="txt4">
                                ADMINISTRATOR
                            </div>
                            <div class="txt5">
                                HOTEL DELVATORE
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="rooms">
        <div class="container">

            <div class="title1">OUR ROOMS</div>

            <div class="title2">Offering striking views of the Indian Ocean, Beira Lake and the city beyond, our 500 guest rooms and suites, and 41 serviced apartments are tastefully furnished to complement the urban-oceanside location and are among the largest in Colombo.</div>

            
                    
            @foreach($rooms as $key =>$room)
                    @php
                    $mod = $key % 4;
                    $mod1 = ($key+1) % 4;
                    @endphp
                    @if($mod == 0)
                    
                    <div class="row">
                    @endif

                    <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="{{ asset('profile/'.$room->roomView) }}" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">{{$room->roomNo}} SUMMER HOTEL</div>
                                        <div class="txt2">START FROM </div>
                                        <div class="txt2">Adult Rs {{$room->adult_price}}.00 Kids Rs {{$room->kid_price}}</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">{{$room->roomNo}} Room</div>
                                    <div class="txt2">
                                        39 REVEW
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                    Deluxe Ocean View Rooms are beautifully appointed with a contemporary design and local Sri Lankan touches.
                                    </div>
                                    <div class="txt4">
                                        <a href="{{route('customerview.roomdetail',$room->id )}}">VIEW DETAIL<i class="fa fa-caret-right"
                                                                             aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="{{route('customerview.roomdetail',$room->id )}}"><span>SELECT THIS ROOM<i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i></span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">FREE WIFI</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">MAX<br>PERSON</div>
                                    </div>
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-coffee" aria-hidden="true"></i>
                                        <div class="txt1">BREAKFAST<br>INCLUDED</div>
                                    </div>
                                    <!-- <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">ROOMS LEFT</div>
                                    </div> -->
                                    <div class="room-ic room-ic-refund">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <div class="txt1">NO REFUND</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt2">Adult: Rs <span  class="txt2" >{{$room->adult_price}}</span></div>
                                        <div class="txt2">kid: Rs <span  class="txt2" >{{$room->kid_price}}</span></div>
                                        <div class="txt2">PER NIGHT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if($mod1  == 0)
                </div>
                @endif
                @if ($key == 3)
                    @break
                @endif
            @endforeach
            

                
                <!-- <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="{{ asset('customers/images/room05.jpg') }}" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">KING DELVATORE</div>
                                        <div class="txt2">START FROM $315.00</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">King Delux Room</div>
                                    <div class="txt2">
                                        39 REVEW
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        Lorem ipsum dolor sit amet, con cateur non troppo di sarono. El brave al mundo.
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">VIEW DETAIL<i class="fa fa-caret-right"
                                                                             aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="details.html"><span>SELECT THIS ROOM<i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i></span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">FREE WIFI</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">MAX<br>PERSON</div>
                                    </div>
                                    <div class="room-ic room-ic-breakfast">
                                        <i class="fa fa-coffee" aria-hidden="true"></i>
                                        <div class="txt1">BREAKFAST<br>INCLUDED</div>
                                    </div>
                                    <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">ROOMS LEFT</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt1">$<span>315</span></div>
                                        <div class="txt2">PER NIGHT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="room-wrapper">
                        <div class="room-inner">
                            <div class="room">
                                <figure>
                                    <img src="{{ asset('customers/images/room06.jpg') }}" alt="" class="img-fluid">
                                    <figcaption>
                                        <div class="txt1">CLASSIC DELVATORE</div>
                                        <div class="txt2">START FROM $115.00</div>
                                    </figcaption>
                                </figure>
                                <div class="caption">
                                    <div class="txt1">Classic Room</div>
                                    <div class="txt2">
                                        87 REVEW
                                        <div class="small-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="txt3">
                                        Lorem ipsum dolor sit amet, con cateur non troppo di sarono. El brave al mundo.
                                    </div>
                                    <div class="txt4">
                                        <a href="details.html">VIEW DETAIL<i class="fa fa-caret-right"
                                                                             aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="select-txt">
                                    <a href="details.html"><span>SELECT THIS ROOM<i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i></span></a>
                                </div>
                                <div class="room-icons">
                                    <div class="room-ic room-ic-wifi">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <div class="txt1">FREE WIFI</div>
                                    </div>
                                    <div class="room-ic room-ic-person">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <div class="txt1">MAX<br>PERSON</div>
                                    </div>
                                    <div class="room-ic room-ic-refund">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <div class="txt1">NO REFUND</div>
                                    </div>
                                    <div class="room-ic room-ic-left">
                                        <div class="txt0">4</div>
                                        <div class="txt1">ROOMS LEFT</div>
                                    </div>
                                    <div class="room-ic room-ic-discount">
                                        <div class="txt0">0<span>%</span></div>
                                        <div class="txt1">DISCOUNT</div>
                                    </div>
                                    <div class="room-price">
                                        <div class="txt1">$<span>115</span></div>
                                        <div class="txt2">PER NIGHT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
            
        </div>
    </div>
    <div id="best-places">
        <div class="container">

            <div class="title1">BEST PLACES AROUND THE SUMMER HOTEL</div>
            <div class="title2">FIND YOUR PLACE</div>

            <div class="owl-carousel owl-carousel-wide">
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">BEST PLACE GALLERY</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">One Bedroom Apartment</div>
                                            <div class="txt3"><i class="fa fa-map-marker" aria-hidden="true"></i> 123
                                                GRIDGUM PARK, SAN DIEGO UNITED STATES
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                    Featuring a spacious bedroom, separate living room area and a fully equipped kitchen, our One Bedroom apartments also have a walk-in shower, separate bath tub and special amenities.
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic1.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Sauna</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic2.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">SPA</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic3.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Free</div>
                                                <div class="rest1-txt2">Massage</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="{{ asset('customers/images/place01.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">BEST PLACE GALLERY</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">Executive Suites</div>
                                            <div class="txt3"><i class="fa fa-map-marker" aria-hidden="true"></i> 123
                                                GRIDGUM PARK, SAN DIEGO UNITED STATES
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                    Our Executive Suites are beautifully appointed and include a spacious guest room and separate living room with impressive views of the city and Indian Ocean. Room views and layout may differ from floor to floor.
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic1.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Sauna</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic2.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">SPA</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic3.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Free</div>
                                                <div class="rest1-txt2">Massage</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="{{ asset('customers/images/place02.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="place-wrapper">
                        <div class="place-inner">
                            <div class="place clearfix">
                                <div class="caption">
                                    <div class="txt1">BEST PLACE GALLERY</div>
                                    <div class="text-block1">
                                        <div class="text-block1-inner">
                                            <div class="txt2">Horizon Club Ocean View Room</div>
                                            <div class="txt3"><i class="fa fa-map-marker" aria-hidden="true"></i> 123
                                                GRIDGUM PARK, SAN DIEGO UNITED STATES
                                            </div>
                                        </div>
                                    </div>
                                    <div class="txt4">
                                    Indulge in the comfort and amenities of our Horizon Club Ocean View Rooms featuring panoramic views of the Indian Ocean, combined with additional Horizon Club privileges.
                                    </div>
                                    <div class="txt5">
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic1.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Sauna</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic2.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">SPA</div>
                                                <div class="rest1-txt2">INCLUDES</div>
                                            </div>
                                        </div>
                                        <div class="rest1 clearfix">
                                            <figure><img src="{{ asset('customers/images/ic3.png') }}" alt="" class="img-fluid"></figure>
                                            <div class="rest1-caption">
                                                <div class="rest1-txt1">Free</div>
                                                <div class="rest1-txt2">Massage</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="figure">
                                    <img src="{{ asset('customers/images/place03.jpg') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div id="what-client-say">
        <div class="container">

            <div class="title1">WHAT CLIENT SAY</div>

            <div class="title2">5-star luxury hotel connected to a shopping center</div>

            <div class="owl-carousel owl-carousel-testimonials">
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the "
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client01.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Maheshika</div>
                                        <div class="txt2">Web Developer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "Really a very awesome choice in Colombo.. the staff are so kind and helpful.. there is a mall connected to the hotel which add more value to the location."
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client02.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Rashmika</div>
                                        <div class="txt2">Architect</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "We were told we somehow had made three reservations for the same room causing us unnecessary stress. They did provide us with transport and free breakfast but at checkout the rate we had booked was not honored and it took some haggling to get close to the correct rate."
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client03.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Josie Howell</div>
                                        <div class="txt2">Lawyer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "Sri Lanka is in dire straits but Summer Hotel makes you feel like you’re on a different planet. Great rooms, hospitality and is very affordable! I only wish they hired more women because all of their staff were men. As a lady traveler it could feel uncomfortable sometimes."
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client01.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Nina Chambers</div>
                                        <div class="txt2">Engineer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "Everything about this hotel is excellent. The staff are great, professional and friendly. They always try their vest to accommodate guests requests. From check in to check out, nothing is negative. Well done Summer Hotel Colombo. Would bring my family next time for sure.
"
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client02.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Jeremy Carlson</div>
                                        <div class="txt2">Actor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial clearfix">
                                <div class="testimonial-caption">
                                    "One of the best hotels that my family and I have stayed in. We have used a lot of different hotels throughout the world and Summer Hotel  Colombo ranks one of the best we have stayed in. Even with all the difficulties SL is in now, the hotel staff saw to our comfort without any complaints. I salute the staff and management for their gracious hospitality. Thank you!."
                                </div>
                                <div class="author clearfix">
                                    <figure><img src="{{ asset('customers/images/client03.jpg') }}" alt="" class="img-fluid"></figure>
                                    <div class="caption">
                                        <div class="txt1">Josie Howell</div>
                                        <div class="txt2">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div id="latest-news">
        <div class="container">

            <div class="title1">UNFORGETTABLE EVENTS</div>
            <div class="title2">Design and enhance your event experiences with the very best of Shangri-La</div>

            <div class="row">
                <div class="col-md-6">
                    <div class="latest-news-wrapper">
                        <div class="latest-news-inner">
                            <div class="latest-news clearfix">
                                <figure><img src="{{ asset('customers/images/news01.jpg') }}" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1"><a href="post.html">Summer Hotel's Meetings & Events</a></div>
                                    <div class="txt2">Summer Hotel Colombo has the most extensive and versatile events space in Sri Lanka. Offers a range of flexible venues including the signature Summer Hotel Ballroom, the largest pillar-less ballroom in the..
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="latest-news-wrapper">
                        <div class="latest-news-inner">
                            <div class="latest-news clearfix">
                                <figure><img src="{{ asset('customers/images/news02.jpg') }}" alt="" class="img-fluid"></figure>
                                <div class="caption">
                                    <div class="txt1"><a href="post.html">Summer Hotel’s Weddings & Celebrations</a></div>
                                    <div class="txt2">The city’s sought-after location for weddings, Summer Hotel Colombo offers unique and luxuriously styled venues with a dedicated team who will help make your special day a memorable one. Let us make..
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection('content')