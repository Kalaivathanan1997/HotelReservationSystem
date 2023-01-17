@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>All Customer</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Customers</li>
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
                        <th>Action</th>

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

                        <td class="text-center">
                            <div class="btn-group dropleft ">
                                <button type="button" class="btn btn-light btn-sm shadow-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if (isset(Auth()->user()->role->permission['name']['customer']['Edit']))
                                        <a href="{{ route('customerss.edit', $customer->id) }}"
                                            class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                    @endif
                                    @if (isset(Auth()->user()->role->permission['name']['customer']['Delete']))
                                        <a href="" data-toggle="modal"
                                            data-target="#deleteModal{{ $customer->id }}"
                                            class="dropdown-item btn-danger text-danger"><i
                                                class="fa fa-trash-alt"></i> Delete</a>
                                    @endif
                                </div>
                            </div>
                      </td>
                    </tr>
                            <!-- Model -->
                            <div class="modal fade" id="deleteModal{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{route('customerss.destroy',[$customer->id])}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$customer->id}}">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">

                                    Do you want to Delete {{$customer->c_name}}?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                            <!--Modal End-->


                    @endforeach
                    @else
                    <td>No Customer to Display</td>
                    @endif


                </tbody>
            </table>
            </div>
            </div>
        </div>
    </section>
@endsection
