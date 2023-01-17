
@extends('customer.master')

@section('content')

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Room Name

                            </th>
                            <th class="th-sm">Adults

                            </th>
                            <th class="th-sm">Kids

                            </th>
                            <th class="th-sm">Arrival

                            </th>
                            <th class="th-sm">Depature

                            </th>
                            <th class="th-sm">Total Amount

                            </th>
                            <th class="th-sm">Action

                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $key =>$booking)


                            <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$booking->room->roomNo}}</td>
                            <td>{{$booking->adults}}</td>
                            <td>{{$booking->kids}}</td>
                            <td>{{$booking->check_in}}</td>
                            <td>{{$booking->check_out}}</td>
                            <td>Rs {{$booking->payableAmount}}.00 </td>
                            
                            <td class="text-center">
                                                    <div class="btn-group dropleft ">
                                                        <button type="button" class="btn btn-light btn-sm shadow-sm"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                        
                                                                <a href="{{ route('RoomBookingEdit.get', $booking->id) }}"
                                                                    class="dropdown-item"><i class="fa fa-edit"></i> Edit</a>
                                                        

                                                                <a href="" data-toggle="modal"
                                                                    data-target="#delete{{$booking->id}}"
                                                                    class="dropdown-item btn-danger text-danger"><i
                                                                        class="fa fa-trash-alt"></i> Delete</a>
                                                            
                                                        </div>
                                                    </div>
                                            </td>
                            </tr>


                    <!-- Delete Model -->
                            <div class="modal fade" id="delete{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{route('customerviews.destroy',[$booking->id])}}" method="POST">
                                @csrf
                                        {{method_field('DELETE')}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$booking->id}}">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    Do you want to Delete  {{$booking->booking_date}}? 
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    <button type="submit" id="DELETE" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>


                            @endforeach
                            
                        
                        
                        </tbody>
                        <tfoot>
                            <tr>
                            <th class="th-sm">No
                            </th>
                            <th class="th-sm">Room Name

                            </th>
                            <th class="th-sm">Adults

                            </th>
                            <th class="th-sm">Kids

                            </th>
                            <th class="th-sm">Arrival

                            </th>
                            <th class="th-sm">Depature

                            </th>
                            <th class="th-sm">Total Amount

                            </th>
                            <th class="th-sm">Action

                            </th>
                            </tr>
                        </tfoot>
                        </table>


                        <!-- Modal -->
                           

            <br>
            
@endsection('content')