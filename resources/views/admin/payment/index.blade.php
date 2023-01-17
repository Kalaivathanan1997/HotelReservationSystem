@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>All Payment</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">All payment</li>
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
                    <h3 class="card-title ">All Payment</h3>
                </div>
                <div class="card-body ">
            <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>customer Name</th>
                        <th>Paid Date</th>
                        <th>Payment Type</th>
                        <th>Paid Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
               
                <tbody>
                    @if (count($payments) >0 )
                    @foreach ($payments as $key => $payment)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td>
                            {{$payment->booking->customer->c_name}}
                        </td>
                        <td>
                            {{$payment->created_at}}
                        </td>
                        <td>
                            {{$payment->paymentType}}
                        </td>
                        <td>
                            {{$payment->amount}}
                        </td>
                        <td class="text-center">
                            <div class="btn-group dropleft ">
                                <button type="button" class="btn btn-light btn-sm shadow-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if (isset(Auth()->user()->role->permission['name']['payment']['View']))
                                        <!-- <a href="{{ route('payments.show', $payment->booking_id) }}"
                                            class="dropdown-item"><i class="fa fa-edit"></i>Booking Detail</a> -->

                                            <form action="{{ route('payments.billing')}}" method="POST">@csrf
                                        {{method_field('POST')}}
                                    <input type="hidden" name="id" value="{{$payment->booking_id}}">
                                    <input type="hidden" name="paymentType" value="{{$payment->paymentType}}">
                                  <button type="supmit" class="dropdown-item" > <i class="fa fa-edit"></i> Booking Detail</button>
                                  
                                   </form>
                                    @endif
                                   
                                </div>
                            </div>
                      </td>
                      
                      </tr>
                    @endforeach
                    @else
                    <tr>No Payment Details to Display</tr>
                    @endif
                    
                  
                </tbody>
            </table>
            </div>
            </div>
        </div>
</section>
@endsection
