@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
    <div class="container-fluid text-md " style="margin: -7px 0;">
        <div class="row ">
            <div class="col-sm-6">
                <h5>Update Rooms Booking</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('bookings.index') }}">Room Booking</a></li>
                    <li class="breadcrumb-item active">Update Room Booking</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid text-md ">
        <form action="{{route('bookings.update', $booking->id)}}" method="POST" enctype="multipart/form-data">@csrf
            {{method_field('PATCH')}}
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
                                            <option @if($booking->customer_id = $customer->id ) selected @endif value="{{ $customer->id }}"> {{ $customer->nic }} </option>
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
                                            @if($booking->stutas != 'Release')
                                            <option  selected  value="{{ $booking->room_id }}"> {{  $booking->room->roomNo}} </option>
                                            @endif
                                            @foreach (App\Models\Room::whereNotIn('id',$BookingRoom_id)->get() as $roomR)
                                            <option @if($booking->room_id == $roomR->id) selected @endif  value="{{ $roomR->id }}"> {{ $roomR->roomNo }} </option>
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
                                        class="form-control @error('adults') is-invalid @enderror"  value="{{$booking->adults}}">
                                        @error('adults')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">No Of Kid</label>
                                        <input type="number" name="kids"
                                            class="form-control @error('kids') is-invalid @enderror" value="{{$booking->kids}}">
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
                                            class="form-control @error('check_in') is-invalid @enderror" value="{{$booking->check_in}}">
                                        @error('check_in')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Check Out(Departure Date)</label>
                                        <input type="date" name="check_out"
                                            class="form-control @error('check_out') is-invalid @enderror" value="{{$booking->check_out}}">
                                        @error('check_out')
                                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Stutas</label>
                                        <select name="stutas" class="form-control custom-select @error('stutas') is-invalid @enderror" required="">
                                            <option value=""  selected disabled hidden>--Please Selecte--</option>
                                            <option @if($booking->stutas == 'Pending') selected @endif  value="Pending">Pending</option>
                                            <option @if($booking->stutas == 'Accept') selected @endif value="Accept">Accept</option>
                                            <option @if($booking->stutas == 'Release') selected @endif value="Release">Release</option>
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
                                                <input type="checkbox" @if(isset($booking->additionalNeed['room_service'])) checked @endif  name="additionalNeed[room_service]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Telephone Service</label>
                                                <input type="checkbox" @if(isset($booking->additionalNeed['telephone_service'])) checked @endif  name="additionalNeed[telephone_service]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Laudry Service</label>
                                                <input type="checkbox" @if(isset($booking->additionalNeed['laundry_service'])) checked @endif  name="additionalNeed[laundry_service]" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Club Access</label>
                                                <input type="checkbox" @if(isset($booking->additionalNeed['club_access'])) checked @endif name="additionalNeed[club_access]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Pool Bath Access</label>
                                                <input type="checkbox" @if(isset($booking->additionalNeed['pool_bath'])) checked @endif name="additionalNeed[pool_bath]" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Card Key Access</label>
                                                <input type="checkbox" @if(isset($booking->additionalNeed['key_card_access'])) checked @endif name="additionalNeed[key_card_access]" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                

                            </div>
                         
                            
                           
</br></br>
                                    <div class="form-group ">
                                      <button class="btn btn-primary float-right " type="submit">Booking Update</button>
                                      <a href="{{route('bookings.index')}}" class="float-left">Back</a>
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
