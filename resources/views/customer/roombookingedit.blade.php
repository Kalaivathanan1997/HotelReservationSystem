@extends('customer.master')

@section('content')

    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="index.html">Home</a><span>|</span>Details</div>
        </div>
    </div>
    <div id="content">
        <div class="container">

            <div class="title1">{{$room->roomNo}} SUMMER HOTEL </div>

            <div class="title2">Lorem ipsum dolor sit amet concateur non troppo di saronno la prada</div>

           

          <<div class="slider2-wrapper">
                 <div class="slider-for2">
                    <div class="slider-item">
                        <img src="{{ asset('profile/'.$room->roomView )}}" alt="" class="img-fluid">
                    </div>
                    <!-- <div class="slider-item">
                        <img src="{{ asset('customers/images/gallery02.jpg')}}" alt="" class="img-fluid">
                    </div> -->
                    
                </div> 

                <div class="slider-nav2">
                     <div class="slider-item">
                        <div class="slider-item-inner">
                            <img src="{{ asset('customers/images/thumb01.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                   <!-- <div class="slider-item">
                        <div class="slider-item-inner">
                            <img src="{{ asset('customers/images/thumb02.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div> -->
                    
                </div>

            </div>


             <div class="details-wrapper clearfix">
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
                <div class="txt2">{{$room->roomNo}} SUMMAR HOTEL</div>
                <div class="txt3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum eros nibh, eu
                        gravida lorem placerat id. In nec urna vel libero finibus vestibulum et in dolor. Duis
                        porttitor, neque et rhoncus commodo, nunc nisi condimentum sem, non consequat felis lacus sed
                        tortor. Aliquam erat volutpat.
                    </p>
                    <p>
                        Etiam nec vulputate justo. Maecenas et dolor finibus, efficitur leo ac, commodo tellus. Proin
                        vestibulum felis sit amet euismod tristique. Morbi ac quam at purus finibus finibus vel a
                        tellus. Proin sit amet vehicula risus, et mattis metus. Phasellus quis tellus vestibulum, ornare
                        metus ac, bibendum mi. Mollis at odio id, venenatis aliquet lacus.
                    </p>
                    <p>
                        Nulla at ex sed leo tristique hendrerit. Curabitur dolor justo, feugiat sed elementum tincidunt,
                        efficitur et eros. Nulla facilisi. Aliquam erat volutpat. Suspendisse feugiat commodo massa non
                        sagittis. Nullam elementum eleifend nunc vitae imperdiet. Nam non erat condimentum, lacinia urna
                        ac, mollis purus. Cras nisl lorem, blandit eu neque quis, porta tristique nisl. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ligula
                        arcu, dapibus a efficitur at, egestas a tellus. Pellentesque in aliquam lectus.
                    </p>
                </div>
                <div class="details-caption">
                    <div class="txt1">01</div>
                    <div class="txt21">{{$room->roomNo}} ROOM</div>
                </div>
            </div> 


            <div class="details2-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-rooms-icons">
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic14.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Car Parking Available</div>
                                <div class="our-rooms-icon-txt2">INCLUDES</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic12.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Breakfast</div>
                                <div class="our-rooms-icon-txt2">INCLUDES</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic13.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Transfer from Airport</div>
                                <div class="our-rooms-icon-txt2">INCLUDES</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic11.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Free WiFi AROUND the DELVATORE</div>
                                <div class="our-rooms-icon-txt2">INCLUDES</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-rooms-icons">
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic15.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Security safe Available</div>
                                <div class="our-rooms-icon-txt2">INCLUDES</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic17.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Restaurant</div>
                                <div class="our-rooms-icon-txt2">DOESN’T INCLUDE</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic18.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">Air Conditioning</div>
                                <div class="our-rooms-icon-txt2">AVAILABLE</div>
                            </div>
                            <div class="our-rooms-icon">
                                <figure><img src="images/ic16.png" alt="" class="img-fluid"></figure>
                                <div class="our-rooms-icon-txt1">GRAND CASINO Hotel DELVATORE</div>
                                <div class="our-rooms-icon-txt2">100$ FREE CHIPS INCLUDES</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="details2-info">
                            <div class="check1">LOREM IPSUM: <span>AVAILABLE</span></div>
                            <div class="check1">DEPOSIT: <span>REQUIRED 20%</span></div>
                            <div>
                                <!-- <a href="#" class="details2-link">
                                    <div class="txt1">$750.00 <span>TOTAL</span></div>
                                    <div class="txt2">RESERVE THIS ROOM</div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking2-wrapper">
                <div class="">
                    <div class="booking-inner clearfix ">
                        <form class="form1 clearfix">
                            <div class="col11 c1">
                                <div class="input1_wrapper">
                                    <label>Check in</label>
                                    <div class="input1_inner">
                                        <input type="text" id="check_in" value="{{$booking->check_in}}"  name="check_in" class="form-control input datepicker" placeholder="Check in" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col11 c2">
                                <div class="input1_wrapper">
                                    <label>Check out</label>
                                    <div class="input1_inner">
                                        <input type="text" id="check_out" value="{{$booking->check_out}}" name="check_out" class="form-control input datepicker"  placeholder="Check out" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col21 c3">
                                <div class="select1_wrapper">
                                    <label>Adults</label>
                                    <div class="select1_inner " id="adult1">
                                        <select id="adult" class="select2 select butsave1 " style="width: 100%">
                                            <option @if($booking->adult == 1) Selected @endif value="1">1 Adult</option>
                                            <option  @if($booking->adult == 2) Selected @endif value="2">2 Adults</option>
                                            <option  @if($booking->adult == 3) Selected @endif value="3">3 Adults</option>
                                            <option  @if($booking->adult == 4) Selected @endif value="4">4 Adults</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col21 c4">
                                <div class="select1_wrapper " >
                                    <label >Children</label>
                                    <div class="select1_inner" id="kid1">
                                        <select id="kid" class="select2 select butsave1 " style="width: 100%">
                                            <option @if($booking->adult == 0) Selected @endif value="0">Children</option>
                                            <option  @if($booking->adult == 1) Selected @endif value="1">1 Child</option>
                                            <option  @if($booking->adult == 2) Selected @endif value="2">2 Children</option>
                                            <option  @if($booking->adult == 3) Selected @endif value="3">3 Children</option>
                                            <option  @if($booking->adult == 4) Selected @endif value="4">4 Children</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col31 c6">
                            <div>
                            <a href="#" id="roomBooking" class="details2-link ">
                                    <div class="txt1" id="toalPrice" > Rs {{$booking->payableAmount}} <span> TOTAL</span>
                                    </div>
                                    <div class="txt2">RESERVE THIS ROOM</div>
                                </a>
                                </div>
                               
                                <!-- <button type="submit" class="btn-form1-submit">CHECK AVAILABILITY</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            @if(Session::get('CustomerName') != null)

            @php

            $bookings = App\Models\Booking::where('customer_id' , Session::get('CustomerId'))->get();


            @endphp

            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Room Name

                            </th>
                            <th class="th-sm">Adults

                            </th>
                            <th class="th-sm">Kids

                            </th>
                            <th class="th-sm">Arrival

                            </th>
                            <th class="th-sm">Depature

                            </th>
                            <th class="th-sm">Total Amount

                            </th>
                            <th class="th-sm">Action

                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $key =>$booking1)


                            <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$booking1->room->roomNo}}</td>
                            <td>{{$booking1->adults}}</td>
                            <td>{{$booking1->kids}}</td>
                            <td>{{$booking1->check_in}}</td>
                            <td>{{$booking1->check_out}}</td>
                            <td>Rs {{$booking1->payableAmount}}.00 </td>
                            
                            <td class="text-center">
                                                    <div class="btn-group dropleft ">
                                                        <button type="button" class="btn btn-light btn-sm shadow-sm"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                        
                                                                <a href="{{ route('bookings.edit', $booking1->id) }}"
                                                                    class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                                        

                                                                <a href="" data-toggle="modal"
                                                                    data-target="#delete{{$booking1->id}}"
                                                                    class="dropdown-item btn-danger text-danger"><i
                                                                        class="fa fa-trash-alt"></i> Delete</a>
                                                            
                                                        </div>
                                                    </div>
                                            </td>
                            </tr>


                            <!-- <div class="modal fade" id="del67ete{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                    <input type="hidden" value="{{$booking->id}}" id="booking_id">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close

                                        </button>
                                        <button type="submit" id="delete" name="delete" onclick="Delete()" class="btn btn-danger"> DELETE

                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div> -->

                    <!-- Delete Model -->
                            <div class="modal fade" id="delete{{$booking1->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{route('customerviews.destroy',[$booking1->id])}}" method="POST">
                                @csrf
                                        {{method_field('DELETE')}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$booking1->id}}">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    Do you want to Delete  {{$booking->booking_date}}? 
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    <button type="submit" id="DELETE" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>


                            @endforeach
                            
                        
                        
                        </tbody>
                        <tfoot>
                            <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Room Name

                            </th>
                            <th class="th-sm">Adults

                            </th>
                            <th class="th-sm">Kids

                            </th>
                            <th class="th-sm">Arrival

                            </th>
                            <th class="th-sm">Depature

                            </th>
                            <th class="th-sm">Total Amount

                            </th>
                            <th class="th-sm">Action

                            </th>
                            </tr>
                        </tfoot>
                        </table>

            <br>
            @endif
            <br>
            

        </div>
    </div>
   
    <script>
 $(document).ready(function() {

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });


document.getElementById("adult1").onclick = function() {  
            fun()  
            }; 
document.getElementById("kid1").onclick = function() {  
            fun()  
            };
document.getElementById("roomBooking").onclick = function() {  
            RoomBooking()  
            }; 
      



function fun(){

    var date1 = new Date(document.getElementById("check_in").value);
    var date2 = new Date(document.getElementById("check_out").value);
    var adult = document.getElementById("adult").value;
    var kid = document.getElementById("kid").value;
    adult1= parseFloat(adult);
    kid1= parseFloat(kid);

    var diff = date2.getTime() - date1.getTime();   
    var daydiff = diff / (1000 * 60 * 60 * 24); 

    var totalprice = ( ({{$room->adult_price}} * adult1 ) + ({{$room->kid_price }} * kid1) ) * daydiff;
    document.getElementById('toalPrice').innerHTML = "Rs "+ totalprice +" <span> TOTAL</span>";
     };






    


            function RoomBooking (){

                var date1 = new Date(document.getElementById("check_in").value);
                var date2 = new Date(document.getElementById("check_out").value);
                var adult = document.getElementById("adult").value;
                var kid = document.getElementById("kid").value;
                adult1= parseFloat(adult);
                kid1= parseFloat(kid);

                var diff = date2.getTime() - date1.getTime();   
                var daydiff = diff / (1000 * 60 * 60 * 24); 

                var totalprice = parseInt( ( ({{$room->adult_price}} * adult1 ) + ({{$room->kid_price }} * kid1) ) * daydiff);


                if(sessionStorage.getItem('CustomerName') != 'CustomerName')
                {
                    
                    var  check_in     =$('#check_in').val();
                    var  check_out    =$('#check_out').val();
                    var  adults       =$('#adult').val();
                    var  kids         =$('#kid').val();
                    var  totalAmount  = totalprice;
                    var  customer_id  = sessionStorage.getItem('CustomerId');
                    var  room_id      = {{$room->id}};
                    var  payableAmount=totalprice;
                    

                $.ajax({
                type:'PATCH',
                url:"{{ route('RoomBookingStore.patch', $booking->id) }}",
                data: {
                    
                            check_in     :check_in     ,
                            check_out    : check_out    ,
                            adults       : adults       ,
                            kids         : kids         ,
                            totalAmount  : totalAmount  ,
                            customer_id  : customer_id  ,
                            room_id      : room_id      ,
                            payableAmount: payableAmount

                        },
                    success:function(data){
                        alert(sessionStorage.getItem('CustomerName') + ' Your Room Booking Update Success ')

                        window.location.href = "{{ route('CustomerRoomBooking.get', $booking->customer_id) }}";
                    }
                         });

                }else
                {
                    alert("Sorry You Need To Login First otherwise can't Booking !! ");
                    $("#loginModal1").modal('show');

                }
            };



           
    });



    </script>

 

@endsection('content')