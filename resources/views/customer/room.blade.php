@extends('customer.master')
    @section('content')
    <!-- reservation start -->

        <div class="breadcrumbs1_wrapper">
            <div class="container">
                <div class="breadcrumbs1"><a href="index.html">Home</a><span>|</span>Reservation</div>
            </div>
        </div>
        <div id="content">
            <div class="container">

                <div class="title1">RESERVATION</div>

                <div class="title2">Summer Hotel Circle members will receive a preferred rate</div>

                <div class="booking2-wrapper">
                    <div class="">
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
                                            <input type="text" class="form-control input datepicker"
                                                placeholder="Check out">
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

                <div class="pane1 clearfix">

                    <div class="tabs2-wrapper">
                        <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                            <li class="active"><a href="#tabs2-1"><i class="fa fa-th"></i></a></li>
                            <li><a href="#tabs2-2"><i class="fa fa-list"></i></a></li>
                        </ul>
                    </div>

                    <div class="sorting dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownSorting" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                            Defaul Sorting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownSorting">
                            <a class="dropdown-item" href="#">Price</a>
                            <a class="dropdown-item" href="#">Popular</a>
                        </div>
                    </div>

                    <div class="sortby dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownSortBy" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                            Sort by popular
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownSortBy">
                            <a class="dropdown-item" href="#">Price</a>
                            <a class="dropdown-item" href="#">Popular</a>
                        </div>
                    </div>

                    <div class="showing-results">Showing 1-9 <span>of 35 relults</span></div>

                </div>

                <div id="second-tab-group" class="tabgroup">
                    <div id="tabs2-1">

                    <div class="row">
                    
            @foreach($rooms as $key =>$room)
                    @php
                    $mod = $key % 3;
                    $mod1 = ($key+1) % 3;
                    @endphp
                    @if($mod == 0)
                    
                    
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
                                        <a href="details.html">VIEW DETAIL<i class="fa fa-caret-right"
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
                   
                    @endif
                    
                @endforeach
                </div>
                    </div>

                    <div id="tabs2-2">

                    @foreach($rooms as $key =>$room1)
                   
                        <div class="room-wide-wrapper">
                            <div class="room-wide-inner">
                                <div class="room-wide clearfix">
                                    <figure>
                                        <img src="{{ asset('profile/'.$room1->roomView) }}" alt="" class="img-fluid">
                                    </figure>
                                    <div class="caption">
                                        <div class="room-wide-columns clearfix">
                                            <div class="room-wide-left">
                                                <div class="txt1">
                                                    159 REVEW
                                                    <div class="small-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="txt2">{{$room1->roomNo}} Summer Hotel</div>
                                            </div>
                                            <div class="room-wide-right">
                                                <div class="room-wide-price">
                                                <div class="txt3">Adult: Rs {{$room1->adult_price}}</div>
                                                <div class="txt3">Kid: Rs {{$room1->kid_price}}</div>
                                                    <!-- <div class="txt3">$ 450.00</div> -->
                                                    <div class="txt4">PER NIGHT</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt5">Deluxe Ocean View Rooms are beautifully appointed with a contemporary design and local Sri Lankan touches. All rooms look out over the Indian Ocean or Colombo cityscape.
                                        </div>
                                        <div class="room-wide-columns clearfix">
                                            <div class="room-wide-left">
                                                <div class="txt6"><a href="{{route('customerview.roomdetail', $room1->id )}}">See Room Details<i
                                                        class="fa fa-caret-right" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="room-wide-right">
                                                <div class="txt7">DEPOSIT:<span>REQUIRED 30%</span></div>
                                            </div>
                                        </div>
                                        <div class="room-wide-columns clearfix">
                                            <div class="room-wide-left">
                                                <div class="txt8">
                                                    <img title="Free WiFi Included" src="{{ asset('customers/images/ic11.png') }}" alt="" class="img-fluid">
                                                    <img title="Breakfast Included" src="{{ asset('customers/images/ic12.png') }}" alt="" class="img-fluid">
                                                    <img title="Trasfer to Airport Included" src="{{ asset('customers/images/ic13.png') }}" alt="" class="img-fluid">
                                                    <img title="Car Parking Included" src="{{ asset('customers/images/ic14.png') }}" alt="" class="img-fluid">
                                                    <img title="Safe Included" src="{{ asset('customers/images/ic15.png') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="room-wide-right">
                                                <div class="txt9">
                                                    <a href="{{route('customerview.roomdetail', $room1->id )}}">RESERVE ROOM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>

                <div class="pane2 clearfix">

                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>

                        <li class="page-item"><a class="page-link" href="#">
                            <i class="fa fa-angle-left" aria-hidden="true"></i></a></li>

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        
                        <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                        <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->

                        <li class="page-item"><a class="page-link" href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                        <li class="page-item"><a class="page-link" href="#">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>

                </div>


            </div>
        </div>

        <!-- reservation End  -->

@endsection('content')