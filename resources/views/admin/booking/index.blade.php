@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>All Room Booking</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Room Booking</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
<div class="container-fluid text-md ">
            <div class="card card-secondary  shadow  mb-3 rounded">
                <div class="card-header with-border">
                    <h3 class="card-title ">All Room Booking</h3>
                    <div class="text-right">
                        <!-- <a  class="btn btn-primary btn-sm" href="/a" >Filder</a> -->
                        <a class="btn btn-primary btn-sm" href="{{ route('bookings.create') }}"> New</a>
                    </div>
                </div>
                <div class="card-body ">
            <table class="table table-bordered table-striped" id="example1" width="100%" cellspacing="0">
                <thead> 
                    <tr>
                        <th>SN </th>
                        <th>Customer Name</th>
                        <th>Room No</th>
                        <th>No of Adult</th>
                        <th>No of Kid</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Total Amount</th>
                        <th>Payable Amount</th>
                        <th>Paid Amount</th>
                        <th>Stutas</th>
                        <th>Action</th>

                    </tr>
                </thead>
               
                <tbody>
                    @if(count($bookings)>0)
                   @php
                   $total=0;
                   $payable =0;
                   
                   @endphp
                    @foreach ($bookings as $key => $booking)
                    @php
                   $total += $booking->totalAmount ;
                   $payable += $booking->payableAmount;
                   
                    $Payments = App\Models\Payment::where('booking_id',$booking->id)
                   
                   @endphp
                    <tr>
                        <td>
                            {{$no=$key+1}}
                        </td>
                        <td>
                            {{$booking->customer->c_name}}
                        </td>
                        <td>
                            {{$booking->room->roomNo}}
                        </td>
                        <td>
                            {{$booking->adults}}
                        </td>
                        <td>
                            {{$booking->kids}}
                        </td>
                        <td>
                            {{$booking->check_in}}
                        </td>
                        <td>
                            {{$booking->check_out}}
                        </td>
                        <td>
                            {{$booking->totalAmount}}
                        </td>
                        <td>
                            {{$booking->payableAmount}}
                        </td>
                        <td>
                          {{$Payments->sum('amount')}}
                        </td>
                        <td>
                            {{$booking->stutas}}
                        </td>

                        <td class="text-center">
                            <div class="btn-group dropleft ">
                                <button type="button" class="btn btn-light btn-sm shadow-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if (isset(Auth()->user()->role->permission['name']['customer']['Edit']))
                                        <a href="{{ route('bookings.edit', $booking->id) }}"
                                            class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                    @endif
                                    @if (isset(Auth()->user()->role->permission['name']['customer']['Edit']))
                                        <a href="" data-toggle="modal" data-target="#paymentModal{{$booking->id}}"
                                         class="dropdown-item"><i class="fa fa-edit"></i> Payment</a>
                                    @endif
                                    @if (isset(Auth()->user()->role->permission['name']['customer']['Delete']))
                                        <a href="" data-toggle="modal"
                                            data-target="#deleteModal{{ $booking->id }}"
                                            class="dropdown-item btn-danger text-danger"><i
                                                class="fa fa-trash-alt"></i> Delete</a>
                                    @endif
                                </div>
                            </div>
                      </td>
                    </tr>
                            <!-- Delete Model -->
                            <div class="modal fade" id="deleteModal{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{route('bookings.destroy',[$booking->id])}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$booking->id}}">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    Do you want to Delete {{$booking->booking_date}}? 
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                            <!--Delete Modal End-->

                            <!-- Payment Alert Modal  -->
                            <div class="modal fade" id="paymentModal{{$booking->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Payment</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <p> Please Selecte Payment Type&hellip;</p>
                                    </div>
                                    
                                    <div class="modal-footer justify-content-between">
                                   <!-- <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#Cashpayment{{$booking->id}}" data-dismiss="modal"> <i class="fa fa-wallet"></i>  Cash Pay</button> -->
                                   <form action="{{ route('payments.billing')}}" method="POST">@csrf
                                        {{method_field('POST')}}
                                    <input type="hidden" name="id" value="{{$booking->id}}">
                                    <input type="hidden" name="paymentType" value="cashPayment">
                                  <button type="supmit" class="btn btn-primary " > <i class="fa fa-wallet"></i>  Cash Pay</button>
                                   </form>

                                   <form action="{{ route('payments.billing')}}" method="POST">@csrf
                                        {{method_field('POST')}}
                                    <input type="hidden" name="id" value="{{$booking->id}}">
                                    <input type="hidden" name="paymentType" value="cardPayment">
                                  <button type="supmit" class="btn btn-primary " > <i class="fa fa-wallet"></i>  Card Pay</button>
                                   {{--<!-- <a  href="payments/billing/{{$booking->id}}/cashview"  class="btn btn-primary text-white"   > <i class="fa fa-credit-card"></i> Cash Pay </a> -->--}}
                                   </form>
                                   {{-- <!-- <a  href="{{ route('payments.billing',['id' => $booking->id ,'paymentType'=> 'cardPayment']) }}"  class="btn btn-primary text-white"   > <i class="fa fa-credit-card"></i> Card Pay </a> -->--}}
                                    
                                </div>
                                </div>
                                <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- Payment Alert Modal End  -->
                            
                           
                    
                    @endforeach

                    <tr>
                        <th>{{$no+1}} </th>
                        <th></th>
                        <th>Room No</th>
                        <th>No of Adult</th>
                        <th>No of Kid</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>{{$total}}</th>
                        <th>{{$payable}}</th>
                        <th>Paid Amount</th>
                        <th>Stutas</th>
                        <th>Action</th>

                    </tr>

                    @else
                    <td>No Room Booking to Display</td>
                    @endif
                    
                  
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </section>
 
@endsection
