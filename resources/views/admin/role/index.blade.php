@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>All Roles</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Roles</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
<div class="container-fluid text-md ">


<!-- <div class="container-fluid mt-5">
    <div class="row ">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">All Roles</li>
                </ol>
            </nav>
            -->

            <div class="card card-secondary  shadow  mb-3 rounded">
                <div class="card-header with-border">
                    <h3 class="card-title ">All roles</h3>
                    <div class="text-right">
                        <!-- <a  class="btn btn-primary btn-sm" href="/a" >Filder</a> -->
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.create') }}"> New</a>
                    </div>
                </div>
                <div class="card-body ">
            <table class="table table-bordered table-striped" id="example1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if(count($roles)>0)
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>
                            {{$key+1}}
                        </td>
                        <td>
                            {{$role->name}}
                        </td>
                        <td>
                            {{$role->description}}
                        </td>
                        <td class="text-center">
                            <div class="btn-group dropleft ">
                                <button type="button" class="btn btn-light btn-sm shadow-sm"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if (isset(Auth()->user()->role->permission['name']['role']['Edit']))
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                    @endif
                                    @if (isset(Auth()->user()->role->permission['name']['role']['Delete']))
                                        <a href="" data-toggle="modal"
                                            data-target="#deleteModal{{ $role->id }}"
                                            class="dropdown-item btn-danger text-danger"><i
                                                class="fa fa-trash-alt"></i> Delete</a>
                                    @endif
                                </div>
                            </div>
                      </td>
                            <!-- Model -->
                            <div class="modal fade" id="deleteModal{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{route('roles.destroy',[$role->id])}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$role->id}}">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">

                                    Do you want to Delete {{$role->name}}?
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

                    </tr>
                    @endforeach
                    @else
                    <td>No Departments to Display</td>
                    @endif


                </tbody>
            </table>
            </div>
            </div>
        </div>
    </section>
@endsection
