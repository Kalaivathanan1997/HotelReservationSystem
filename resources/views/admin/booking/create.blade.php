@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>Create Rooms Booking</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bookings.index') }}">Room Booking</a></li>
                    <li class="breadcrumb-item active">Create Room Booking</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid text-md ">
        <form action="{{route('bookings.store')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-secondary  shadow  mb-3 rounded">
                        <div class="card-header with-border">
                            <h3 class="card-title ">Booking Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="">Customer Name</label>
                                            <select name="customer_id" class="form-control  @error('customer_id') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            @foreach (App\Models\Customer::all() as $customer)
                                            <option   value="{{ $customer->id }}"> {{ $customer->nic }} </option>
                                            @endforeach 
                                        </select>
                                            @error('customer_id')
                                            <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Room No</label>
                                        <select name="room_id" class="form-control custom-select @error('room_id') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            @php
                                                $BookingRoom_id = App\Models\Booking::select('room_id')->whereIN ('stutas',['Pending','Accept']);
                                            @endphp
                                            @foreach (App\Models\Room::whereNotIn('id',$BookingRoom_id)->get() as $room)
                                            <option   value="{{ $room->id }}"> {{ $room->roomNo }} </option>
                                            @endforeach 
                                        </select>
                                        @error('room_id')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No Of Adult</label>
                                        <input type="number" name="adults"
                                            class="form-control @error('adults') is-invalid @enderror" required="">
                                        @error('adults')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No Of Kid</label>
                                        <input type="number" name="kids"
                                            class="form-control @error('kids') is-invalid @enderror" required="">
                                        @error('kids')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Check In(Arrival Date)</label>
                                        <input type="date" name="check_in"
                                            class="form-control @error('check_in') is-invalid @enderror" required="">
                                        @error('check_in')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Check Out(Departure Date)</label>
                                        <input type="date" name="check_out"
                                            class="form-control @error('check_out') is-invalid @enderror" required="">
                                        @error('check_out')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Additional Need</label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Stutas</label>
                                        <select name="stutas" class="form-control custom-select @error('stutas') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            <option   value="Pending">Pending</option>
                                            <option value="Accept">Accept</option>
                                            <option value="Release">Release</option>
                                        </select>
                                        @error('stutas')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class=" ">
                                                <label for="">Additional Need</label>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label for="">Room Service</label>
                                                <input type="checkbox"  name="additionalNeed[room_service]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Telephone Service</label>
                                                <input type="checkbox"  name="additionalNeed[telephone_service]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Laudry Service</label>
                                                <input type="checkbox"  name="additionalNeed[laundry_service]" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Club Access</label>
                                                <input type="checkbox"  name="additionalNeed[club_access]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Pool Bath Access</label>
                                                <input type="checkbox"  name="additionalNeed[pool_bath]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Card Key Access</label>
                                                <input type="checkbox"  name="additionalNeed[key_card_access]" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                

                            </div>
                         
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                      <button class="btn btn-primary " type="submit">Booking</button>
                                     </div>
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
