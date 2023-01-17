@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Create User</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create User</li>
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
          <h1 class="m-0 text-dark">User</h1>
        </div> /.col -->
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div> /.col
      </div>/.row
    </div>--><!-- /.container-fluid
  </div> -->


  <!-- <div class="container-fluid mt-5"> -->
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                Register Employee
            </li>
        </ol>
    </nav>   -->

    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">@csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title ">General Information</h3></div>
                    <div class="card-body">
                        <div class="form-group ">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" required="">
                            @error('firstname')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" required="">
                            @error('lastname')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" required="">
                            @error('address')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="number" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="">
                            @error('mobile_number')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
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
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role_id" class="form-control" required="">
                                @foreach (App\Models\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div></div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </form>
    </div>
    </section>


<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>

@endsection



