@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>Update Room</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('rooms.index')}}">All Rooms</a></li>
                    <li class="breadcrumb-item active">update Room</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid text-md ">
        <form action="{{route('rooms.update' , $room->id)}}" method="POST" enctype="multipart/form-data">@csrf
            {{method_field('PATCH')}}
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
                                                class="form-control @error('roomNo') is-invalid @enderror" value="{{$room->roomNo}}">
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
                                            <option @if($room->roomType = 'single') selected @endif value="single">Single</option>
                                            <option @if($room->roomType = 'double') selected @endif value="double">Double</option>
                                            <option @if($room->roomType = 'triple') selected @endif value="triple">Triple</option>
                                            <option @if($room->roomType = 'quad') selected @endif value="quad">Quad</option>
                                            <option @if($room->roomType = 'deluxe') selected @endif value="deluxe">Deluxe</option>
                                            <option @if($room->roomType = 'superior') selected @endif value="superior">Superior</option>
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
                                            <option  value=""  selected disabled hidden>--Please Selecte--</option>
                                            <option @if($room->floorNo = '1') selected @endif value="1">01</option>
                                            <option @if($room->floorNo = '2') selected @endif value="2">02</option>
                                            <option @if($room->floorNo = '3') selected @endif value="3">03</option>
                                            <option @if($room->floorNo = '4') selected @endif value="4">04</option>
                                            <option @if($room->floorNo = '5') selected @endif value="5">05</option>
                                            <option @if($room->floorNo = '6') selected @endif value="6">06</option>
                                        </select>
                                        @error('floorNo')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Per Adult Price</label>
                                        <input type="number" name="adult_price"  value="{{$room->adult_price}}"
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
                                            class="form-control @error('kid_price') is-invalid @enderror"  value="{{$room->kid_price}}">
                                        @error('kid_price')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="">amenities</label>
                                            <div class="select2-purple">
                                                <select  name="amenities[]"   class="select2 form-control @error('amenities') is-invalid @enderror" required="" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                <option @if(in_array('Air conditioning', $room->amenities)) selected="selected" @endif value="Air conditioning">Air conditioning</option>
                                                <option @if(in_array('Free Wifi', $room->amenities)) selected @endif value="Free Wifi">  Free Wifi</option>
                                                <option @if(in_array('Free parking' , $room->amenities)) selected @endif value="Free parking">Free parking</option>
                                                <option @if(in_array('Free Breakfast', $room->amenities)) selected @endif value="Free Breakfast">Free Breakfast</option>
                                                <option @if(in_array('Outdoor dining area', $room->amenities)) selected @endif value="Outdoor dining area">Outdoor dining area</option>
                                                <option @if(in_array('Panoramic views of ocean', $room->amenities)) selected @endif value="Panoramic views of ocean">Panoramic views of ocean</option>
                                                <option @if(in_array('Pool View', $room->amenities)) selected @endif value="Pool View">Pool View</option>
                                                <option @if(in_array('Cable Channels', $room->amenities)) selected @endif value="Cable Channels">Cable Channels</option>
                                                <option @if(in_array('Flatscreen TV', $room->amenities)) selected @endif value="Flatscreen TV">Flatscreen TV</option>
                                                <option @if(in_array('Private bathroom', $room->amenities)) selected @endif value="Private bathroom">Private bathroom</option>
                                                <option @if(in_array('Bath or Shower', $room->amenities)) selected @endif value="Bath or Shower">Bath or Shower</option>
                                                <option @if(in_array('Towels', $room->amenities)) selected @endif value="Towels">Towels</option>
                                                <option @if(in_array('Clothes rack', $room->amenities)) selected @endif value="Clothes rack">Clothes rack</option>
                                                <option @if(in_array('Key card access', $room->amenities)) selected @endif  value="Key card access">Key card access</option>
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
                                class="form-control @error('roomView') valid  @enderror" placeholder="Room Profile">
                                <img src="{{ asset('profile/'.$room->roomView)}}" alt="Room Profile" width="200px" hieght="200px" class="text-center">
                                        @error('roomView')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                </br> </br></br>     </br> </br></br>


                                    <div class="form-group  ">
                                      <button class="btn btn-primary float-right" type="submit">Update</button>
                                      <a href="{{route('rooms.index')}}" class="float-left">Back</a>
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
