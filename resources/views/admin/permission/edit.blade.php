@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Update Permission</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Permission</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
<div class="container-fluid text-md">


                <form action="{{route('permissions.update',[$permission->id])}}" class="form-group" method="POST">
                @csrf
               {{method_field('PATCH')}}
               <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title "> Update Permission</h3>
                    </div>
                    <div class="card-body">
                  <h3>{{$permission->role->name}}</h3>

                <table class="table table-bordered table-dark mt-3">
                    <thead>
                      <tr>
                        <th scope="col">Permission</th>
                        <th scope="col">Add</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                        <th scope="col">List</th>
                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Room</td>
                                <td class="text-center"><input type="checkbox" name="name[room][Add]"
                                    @if(isset($permission['name']['room']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][Edit]"
                                    @if(isset($permission['name']['room']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][View]"
                                    @if(isset($permission['name']['room']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][Delete]"
                                    @if(isset($permission['name']['room']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][List]"
                                    @if(isset($permission['name']['room']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td class="text-center"><input type="checkbox" name="name[role][Add]"
                                    @if(isset($permission['name']['role']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][Edit]"
                                    @if(isset($permission['name']['role']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][View]"
                                    @if(isset($permission['name']['role']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][Delete]"
                                    @if(isset($permission['name']['role']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][List]"
                                    @if(isset($permission['name']['role']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>Permissions</td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Add]"
                                    @if(isset($permission['name']['permission']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Edit]"
                                    @if(isset($permission['name']['permission']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][View]"
                                    @if(isset($permission['name']['permission']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Delete]"
                                    @if(isset($permission['name']['permission']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][List]"
                                    @if(isset($permission['name']['permission']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td class="text-center"><input type="checkbox" name="name[user][Add]"
                                    @if(isset($permission['name']['user']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][Edit]"
                                    @if(isset($permission['name']['user']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][View]"
                                    @if(isset($permission['name']['user']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][Delete]"
                                    @if(isset($permission['name']['user']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][List]"
                                    @if(isset($permission['name']['user']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>Room Booking</td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Add]"
                                    @if(isset($permission['name']['booking']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Edit]"
                                    @if(isset($permission['name']['booking']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][View]"
                                    @if(isset($permission['name']['booking']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Delete]"
                                    @if(isset($permission['name']['booking']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][List]"
                                    @if(isset($permission['name']['booking']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>Payment</td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Add]"
                                    @if(isset($permission['name']['payment']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Edit]"
                                    @if(isset($permission['name']['payment']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][View]"
                                    @if(isset($permission['name']['payment']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Delete]"
                                    @if(isset($permission['name']['payment']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][List]"
                                    @if(isset($permission['name']['payment']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>

                            <tr>
                                <td>Customer</td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Add]"
                                    @if(isset($permission['name']['customer']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Edit]"
                                    @if(isset($permission['name']['customer']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][View]"
                                    @if(isset($permission['name']['customer']['View']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Delete]"
                                    @if(isset($permission['name']['customer']['Delete']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][List]"
                                    @if(isset($permission['name']['customer']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>


                            {{-- <tr>
                                <td>Leave</td>
                                <td class="text-center"></td>
                                <td class="text-center"><input type="checkbox" name="name[leave][Edit]"
                                    @if(isset($permission['name']['leave']['Edit']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"><input type="checkbox" name="name[leave][List]"
                                    @if(isset($permission['name']['leave']['List']))
                                    checked
                                    @endif
                                    value="1"></td>
                            </tr>
                            <tr>
                                <td>Mail</td>
                                <td class="text-center"><input type="checkbox" name="name[mail][Add]"
                                    @if(isset($permission['name']['mail']['Add']))
                                    checked
                                    @endif
                                    value="1"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                            </tr> --}}
                    </tbody>
                </table>
                @if(isset(Auth()->user()->role->permission['name']['permission']['Edit']))
</br>
                <button class="btn btn-primary float-right">Update</button>
                @endif
            <a href="{{route('permissions.index')}}" class="float-left">Back</a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
