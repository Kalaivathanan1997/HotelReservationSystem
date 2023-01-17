@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Update User</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update User</li>
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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                Update User
            </li>
        </ol>
    </nav>
  -->
    <form action="{{route('users.update',[$user->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}

        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title ">General Information</h3></div>
                    <div class="card-body">
                        <div class="form-group ">
                            <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required="" value="{{$user->name}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" required="" value="{{$user->address}}">
                            @error('address')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="" value="{{$user->mobile_number}}">
                            @error('mobile_number')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
</br>
                        <div class="form-group">
                             <a href="{{route('users.index')}}" class="float-left ">Back</a>
                           <!--  <label for="">Image</label>
                            <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror" placeholder="dd-mm-yyyy" >
                            @error('image')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title "> Login Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="" value="{{$user->email}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        @if(Auth()->user()->role['name']=='admin')
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role_id" class="form-control" required="">
                                @foreach (App\Models\Role::all() as $role)
                            <option value="{{$role->id}}"
                                @if ($user->role_id==$role->id)
                                    selected
                                @endif>
                                {{$role->name}}
                            </option>
                                @endforeach
                            </select>
                        </div>
                        @else
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role_id" class="form-control" required="">

                            <option value="{{$user->role_id}}">

                                {{$user->role->name}}
                            </option>

                            </select>
                        </div>
                        @endif
                        <br>
                        <div class="form-group text-center">

                            <button class="btn btn-primary" type="submit">Update</button>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </form>
</div>
</section>

@endsection
