@extends('admin.layouts.master')

@section('content-header')
{{-- <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div> --}}
@endsection

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            {{-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol> --}}

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-wh ite mb-4">
                        <div class="card-body">Users</div>
                        <p><i class="fas fa-user fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px;">
                               {{App\Models\User::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Rooms</div>
                        <p><i class="fas fa-home fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px;">

                               {{App\Models\Room::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Room Booking</div>
                        <p><i class="fas fa-envelope fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px;">
                                {{App\Models\Booking::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Customer</div>
                        <p><i class="fas fa-users fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px;">
                               {{App\Models\Customer::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <!-- <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area mr-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div> -->
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Customer</th>
                                    <th>Room</th>
                                    <th>Adult No</th>
                                    <th>Kid No</th>
                                    <th>check in</th>
                                    <th>check out</th>
                                    <th>Stutas</th>
                                </tr>
                            </thead>
                            <tbody>

                   @php


                   $bookings = App\Models\Booking:: where('stutas', 'Pending')->get();
                   @endphp
                    @foreach ($bookings as $key => $booking)


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
                            {{$booking->stutas}}
                        </td>
                        <tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>Customer</th>
                                    <th>Room</th>
                                    <th>Adult No</th>
                                    <th>Kid No</th>
                                    <th>check in</th>
                                    <th>check out</th>
                                    <th>Stutas</th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

 @endsection
