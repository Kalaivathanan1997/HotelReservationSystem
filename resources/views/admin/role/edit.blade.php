@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Update Role</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
        <div class="container-fluid text-md ">
<!--
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            -->
        <form action="{{route('roles.update',[$role->id])}}" method="post">@csrf
            {{method_field('PATCH')}}
            <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title ">Update Role</h3></div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$role->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control @error('name') is-invalid @enderror" name="description" id="" cols="20" rows="5">{{$role->description}}</textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            @if(isset(Auth()->user()->role->permission['name']['role']['Edit']))
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                            @endif
                            <a href="{{route('roles.index')}}" class="float-left">Back</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
</section>
@endsection
