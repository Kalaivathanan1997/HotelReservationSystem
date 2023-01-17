@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>Create Room</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Create Room</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid text-md ">
        <form action="{{route('rooms.store')}}" method="POST" enctype="multipart/form-data">@csrf
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
                                            <label for="">Room No</label>
                                            <input type="text" name="roomNo"
                                                class="form-control @error('roomNo') is-invalid @enderror" required="">
                                            @error('roomNo')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Room Type</label>
                                        <select name="roomType" class="form-control @error('roomType') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            <option value="single">Single</option>
                                            <option value="double">Double</option>
                                            <option value="triple">Triple</option>
                                            <option value="quad">Quad</option>
                                            <option value="deluxe">Deluxe</option>
                                            <option value="superior">Superior</option>
                                        </select>
                                        @error('roomType')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Floor No</label>
                                        <select name="floorNo" class="form-control @error('floorNo') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                        </select>
                                        @error('floorNo')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Per Adult Price</label>
                                        <input type="number" name="adult_price"
                                            class="form-control @error('adult_price') is-invalid @enderror" required="">
                                        @error('adult_price')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Per Kid Price</label>
                                        <input type="number" name="kid_price"
                                            class="form-control @error('kid_price') is-invalid @enderror" required="">
                                        @error('kid_price')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="">amenities</label>
                                            <div class="select2-purple">
                                                <select  name="amenities[]"  class="select2 form-control @error('amenities') is-invalid @enderror" required="" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                <option value="Air conditioning">Air conditioning</option>
                                                <option value="Free Wifi">Free Wifi</option>
                                                <option value="Free parking">Free parking</option>
                                                <option value="Free Breakfast">Free Breakfast</option>
                                                <option value="Outdoor dining area">Outdoor dining area</option>
                                                <option value="Panoramic views of ocean">Panoramic views of ocean</option>
                                                <option value="Pool View">Pool View</option>
                                                <option value="Cable Channels">Cable Channels</option>
                                                <option value="Flatscreen TV">Flatscreen TV</option>
                                                <option value="Private bathroom">Private bathroom</option>
                                                <option value="Bath or Shower">Bath or Shower</option>
                                                <option value="Towels">Towels</option>
                                                <option value="Clothes rack">Clothes rack</option>
                                                <option value="Key card access">Key card access</option>

                                                </select>
                                            </div>
                                            @error('amenities')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="">Room View Image</label>

                                    <input type="file" name="roomView" accept="image/*"
                                class="form-control @error('roomView') valid  @enderror" required="" placeholder="Room Profile">

                                        @error('roomView')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 ">
</br>
                                    <div class="form-group float-right">
                                      <button class="btn btn-primary " type="submit">Register</button>
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
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#example-getting-started').multiselect();
    });

</script>

@endsection
