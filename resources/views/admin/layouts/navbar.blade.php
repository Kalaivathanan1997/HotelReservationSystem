<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hotel_Reservation | @yield('title')</title>
        

        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Adminlte/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('Adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

       <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-warning navbar-light">

        {{-- toastr --}}
           @if(Session::has('success'))
                <div style="position: fixed; top: 0; right: 0; min-height: 100px; min-width: 300px; ">
                    <!-- Then put toasts within -->
                    <div class="toast  " role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header " style="background:rgba(0, 172, 0,0.6); color:white "> 
                                <i class="fas fa-check"></i> 
                            <strong class="mr-auto"> &emsp; SUCCESS</strong>
                            {{-- <small class="text-muted">just now</small>
                            --}}
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body " style="background:rgba(0, 172, 0,0.9 ); color:black;">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
            @endif
           @if(Session::has('warning'))
                <div style="position: fixed; top: 0; right: 0; min-height: 100px; min-width: 300px; ">
                    <!-- Then put toasts within -->
                    <div class="toast  " role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header " style="background:rgba(220, 197, 27,0.6); color:white "> 
                                <i class="fas fa-exclamation-triangle"></i>
                            <strong class="mr-auto"> &emsp; WARNING</strong>
                            {{-- <small class="text-muted">just now</small>
                            --}}
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body " style="background:rgba(220, 197, 27,0.9 ); color:black;">
                            {{ Session::get('warning') }}
                        </div>
                    </div>
                </div>
            @endif

        <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->

   {{-- <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
                
    <a class="nav-link dropdown" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
     <div class="user-panel mt--1 ">
        <div class="image">
         
        </div>
        
      </div>       </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="">Settings</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=""
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    @csrf
                                </form>cm
                </div>
            </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>--}}

 <!-- User Name and logout -->
 <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown show">
                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> <span class="text-muted">{{ Auth::user()->name }}</span>
                        {{ Auth::user()->role->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                         <a class="dropdown-item" href="#">Profile</a>
                        {{-- <a class="dropdown-item" href="#">Change Password</a> --}}
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="
                                   event.preventDefault();
                                   document.getElementById('logout-form').submit();
                                   ">Logout</a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
  </nav>
  
  {{--
 
        <style type="text/css">
                img.avatar {
                width:50px;
                height:50px;
                border-radius: 50%;
                }
    
</style>
--}}
