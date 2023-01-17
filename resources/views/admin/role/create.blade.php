@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Create Role</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
        <div class="container-fluid text-md ">

<!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
          </div>  /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div>/.col -->
        <!-- </div>    /.row -->
      <!-- </div>  /.container-fluid -->
    <!-- </div>
<div class="content">
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            -->
        <form action="{{route('roles.store')}}" method="POST">@csrf
        <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title "> Create Role</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control @error('name') is-invalid @enderror" name="description" id="" cols="20" rows="5"></textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</section>
@endsection
