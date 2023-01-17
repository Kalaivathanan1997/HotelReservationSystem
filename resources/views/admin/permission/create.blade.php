@extends('admin.layouts.master')

@section('content_header')
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Create Permission</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Permission</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')
<section class="content">
<div class="container-fluid text-md">


                <form action="{{route('permissions.store')}}" class="form-group" method="POST">
                @csrf

                <div class="card card-secondary  shadow  mb-3 rounded">
                    <div class="card-header with-border"><h3 class="card-title ">Permissions</h3>
                    </div>
                    <div class="card-body">
                    <select name="role_id"  class="form-control @error('role_id') is-invalid @enderror">
                    <option value="">Select Role</option>
                    @foreach (App\Models\Role::all() as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                    @error('role_id')
                        <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                    @enderror
                </select>

                <table class="table table-bordered table-dark mt-3">
                    <thead>
                      <tr>
                        <th scope="col">Permission</th>
                        <th scope="col">Add</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">View</th>
                        <th scope="col">List</th>
                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Room</td>
                                <td class="text-center"><input type="checkbox" name="name[room][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[room][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td class="text-center"><input type="checkbox" name="name[role][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[role][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>Permissions</td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[permission][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td class="text-center"><input type="checkbox" name="name[user][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[user][List]" value="1"></td>
                            </tr>

                            <tr>
                                <td>Booking</td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[booking][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>Payment</td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[payment][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>Customer</td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Add]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Edit]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][View]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][Delete]" value="1"></td>
                                <td class="text-center"><input type="checkbox" name="name[customer][List]" value="1"></td>
                            </tr>


                            <tr>
                                <td>Leave</td>
                                <td></td>
                                <td class="text-center"><input type="checkbox" name="name[leave][Edit]" value="1"></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><input type="checkbox" name="name[leave][List]" value="1"></td>
                            </tr>
                            <tr>
                                <td>Mail</td>
                                <td class="text-center"><input type="checkbox" name="name[mail][Add]" value="1"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                    </tbody>
                </table>
                </br>
                <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
