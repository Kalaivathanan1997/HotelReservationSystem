@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Room Booking Report</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <!-- <li class="breadcrumb-item active">All Room Booking</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')

@php

if(isset($_GET['submit']))
{
    
    
    $from = $_GET['fromDate'];
    $to = $_GET['toDate'];

    $bookings = App\Models\Booking::whereBetween('created_at', [$from, $to])->get();
}





@endphp

<section class="content">
<div class="container-fluid text-md ">

            <div class="card   shadow mb-3 rounded mx-auto"    >
                <div class="card-header with-border">
                    <h3 class="card-title ">All Payment</h3>
                </div>
                <div class="card-body ">
                    <form action="#" method="GET">
                    <div class="row">
                        <div class="form-group col-md-6 ">
                            <label for="recipient-name" class="col-form-label">From Date:</label>
                            <input type="date" class="form-control" name="fromDate"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">To Date:</label>
                            <input type="date" class="form-control" name="toDate"  required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 text-center">
                    <button type="submit"  name="submit" class="btn btn-primary btn-lg ">Filter Result</button>
                    </div>
                    </div>
                    </form>

                </div>
            </div>



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

                       
                    </tr>
                           
                           
                            
                           
                    
                    @endforeach

                    <tr>
                        <th>{{$no+1}} </th>
                        <th>Customer Name</th>
                        <th>Room No</th>
                        <th>No of Adult</th>
                        <th>No of Kid</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>{{$total}}</th>
                        <th>{{$payable}}</th>
                        <th>Paid Amount</th>
                        <th>Stutas</th>
                       

                    </tr>

                    @else
                    <td colspan="11" class="text-center">No Room Booking to Display</td>
                    @endif
                    
                  
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </section>
 
@endsection
