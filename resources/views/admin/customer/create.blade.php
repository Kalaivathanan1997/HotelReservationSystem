@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>Create Cutomer</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('customerss.index') }}">All Customer</a></li>
                    <li class="breadcrumb-item active">Create Customer</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid text-md ">
        <form action="{{route('customerss.store')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-secondary  shadow  mb-3 rounded">
                        <div class="card-header with-border">
                            <h3 class="card-title ">General Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="">Customer Name</label>
                                            <input type="text" name="c_name"
                                                class="form-control @error('c_name') is-invalid @enderror" required="">
                                            @error('c_name')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Addresss</label>
                                        <input type="text" name="address"
                                                class="form-control @error('address') is-invalid @enderror" required="">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input type="date" name="birth"
                                                class="form-control @error('birth') is-invalid @enderror" required="">
                                        @error('birth')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone No</label>
                                        <input type="tel" id="phone" name="phone"  class="form-control @error('phone') is-invalid @enderror"   placeholder="+940771234567" pattern="[+]{1}[0-9]{11,14}" required>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nationality</label>
                                        <input type="text" name="national"
                                            class="form-control @error('national') is-invalid @enderror" required="">
                                        @error('national')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="">NIC No / Passport No</label>
                                            <input type="text" name="nic"
                                            class="form-control @error('nic') is-invalid @enderror" required="">
                                            @error('nic')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>-- Selecte One--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Shemale">Shemale</option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Civil Stutas</label>
                                        <select name="stutas" class="form-control @error('stutas') is-invalid @enderror" required="">
                                                <option value=""  selected disabled hidden>-- Selecte One --</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorce">Divorce</option>
                                            </select>
                                            @error('stutas')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-secondary  shadow  mb-3 rounded">
                        <div class="card-header with-border"><h3 class="card-title "> Login Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="pass" class="form-control @error('pass') is-invalid @enderror" required="">
                                        @error('pass')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group text-right">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function () {
        $('select').selectpicker();
    });

</script>


@endsection
