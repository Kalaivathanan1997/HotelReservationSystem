@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Customer Report</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <!-- <li class="breadcrumb-item active">All Customers</li> -->
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

    $customers = App\Models\Customer::whereBetween('created_at', [$from, $to])->get();
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
                    <h3 class="card-title ">All Customers</h3>
                    <div class="text-right">
                        <!-- <a  class="btn btn-primary btn-sm" href="/a" >Filder</a> -->
                        <a class="btn btn-primary btn-sm" href="{{ route('customerss.create') }}"> New</a>
                    </div>
                </div>
                <div class="card-body ">
            <table class="table table-bordered table-striped" id="example1" width="100%" cellspacing="0">
                <thead> 
                    <tr>
                        <th>SN</th>
                        <th>Customer Name</th>
                        <th>Phone No</th>
                        <th>NIC No</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                        

                    </tr>
                </thead>
               
                <tbody>
                    @if(count($customers)>0)
                    @foreach ($customers as $key => $customer)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td>
                            {{$customer->c_name}}
                        </td>
                        <td>
                            {{$customer->phone}}
                        </td>
                        <td>
                            {{$customer->nic}}
                        </td>
                        <td>
                            {{$customer->address}}
                        </td>
                        <td>
                            {{$customer->gender}}
                        </td>
                        <td>
                            {{$customer->email}}
                        </td>
                        <td>
                        1234567
                        </td>

                        
                    </tr>
                            
                       
                    
                    @endforeach
                    @else
                    <td colspan="9" class="text-center">No Customer to Display</td>
                    @endif
                    
                  
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </section>
@endsection
