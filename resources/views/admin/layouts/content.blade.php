
<div class="wrapper">
<div class="content-wrapper">
<div class="content-header">
      
    <section class="content">
      <div class="container-fluid">
      <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Users</div>
                        <p><i class="fas fa-user fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('users.index')}}" style="font-size: 18px;">
                                {{App\User::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Divisions</div>
                        <p><i class="fas fa-home fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('gndiv.index')}}" style="font-size: 18px;">
                                
                                {{App\GnD::all()->count()}}
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Notice</div>
                        <p><i class="fas fa-envelope fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('notices.index')}}" style="font-size: 18px;">
                                {{App\Notice::all()->count()}} 
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">All GN Divisions</div>
                        <p><i class="fas fa-book fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('gnd.index')}}" style="font-size: 18px;">
                                {{App\Gn_div::all()->count()}} 
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>


           
           
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Notifications
                </div>
                 <!--notices-->
                 
                @foreach (App\Notice::latest()->where('r_name',auth()->user()->name)->where('status',0)->get() as $notice)          
            <div class="card alert alert-info">
                <div class="card-header alert alert-warning">{{ $notice->title }}</div>

                <div class="card-body">
                   <p>{{$notice->description}}</p>
                <p class="badge badge-success">Date: {{$notice->date}}</p>
                <p class="badge badge-warning">Created By: {{$notice->s_name}}</p>
                </div>
                <table class="table mt-5" >
                        <thead>
                          <tr>
                            <th scope="col">File Name</th>
                            <th scope="col">view</th>
                            <th scope="col">Download</th>
                            <th scope="col">Reply</th>
                            <th scope="col">Status</th>
                            <th scope="col">Approve/Reject</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                            <td>{{$notice->file}}</td>

                            <td> 
                             @if($notice->file=='')
                            <a href="/alert" > view </a>
                            @else
                             <a href="/view/{{$notice->file}}" > view </a>
                             @endif
                             </td>
                            <td>
                            @if($notice->file=='')
                            <a href="/alert" >download </a>
                            @else
                            <a href="/download/{{$notice->file}}" >download </a>
                            @endif
                            </td>
                            <td>{{$notice->message}}</td>
                            
                            <td>
                                @if($notice->status=='0')
                                <span class="alert alert-danger">Pending</span>
                                @else
                                <span class="alert alert-success">Accept</span>
                                @endif
                                </td>
                                  <td>
                                       @if($notice->status=='0')
                                            <a href="#" data-toggle="modal" data-target="#updateModal{{$notice->id}}">Approve/Reject</i></a>
                                          
                                            <!-- Modal -->
                                            <div class="modal fade" id="updateModal{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <form action="{{route('accept.reject',[$notice->id])}}" method="POST">
                                                        @csrf
                                                       
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel{{$notice->id}}">Confirm Notice</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="Status">Status</label> 
                                                            <select name="status" class="form-control"  required="">
                                                                <option value="0">Pending</option>
                                                                <option value="1">Accept</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="message">Message</label> 
                                                           <textarea class="form-control"  name="message"cols="30" rows="5" required=""></textarea>
                                                        </div>
                                                       
                                                  
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                                </div>
                                            </div>
                                            <!--Modal End-->
                                           
                                            @else
                                             Seen
                                            @endif
                                            
                                        </td>
                          </tr>
                         
                        </tbody>
                      </table>
                
                



              

                <div class="card-footer">  
                    @if(isset(Auth()->user()->role->permission['name']['notice']['Edit']))                 
                    <a href="{{route('notices.edit',[$notice->id])}}"><i class="fas fa-edit"></i></a>@endif
                    <span class="float-right">
                        @if(isset(Auth()->user()->role->permission['name']['notice']['Delete']))       
                        <a href="#" data-toggle="modal" data-target="#deleteModal{{$notice->id}}"><i class="fas fa-trash"></i></a>
                        @endif
                         <!-- Modal -->
                         <div class="modal fade" id="deleteModal{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <form action="{{route('notices.destroy',[$notice->id])}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{$notice->id}}">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    
                                Do you want to Delete {{$notice->title}}? 
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </form>
                            </div>
                        </div>
                        
                        <!--Modal End-->
                    </span>
                </div>
            </div>
            @endforeach

                
            </div>
        </div>
    </main>
      </div><!--/. container-fluid -->
    </section>
   
</div>