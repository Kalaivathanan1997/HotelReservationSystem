@php
$segment = Request::segment(1);
$segment1 = Request::segment(2);
$segment2 = Request::segment(3);
@endphp


<aside class="main-sidebar elevation-4 sidebar-dark-orange">
    <!-- Brand Logo -->
    <a href="{{ URL('/home') }}" class="brand-link">
        {{-- <img src="{{ asset('profile/avatar2.png') }}" alt="Hote_logo" class=" img-circle elevation-3"
            style="opacity: .9" width="20px" height="20px"> --}}
        <span class="brand-text font-weight-light ml-4">Hotel_Reservation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('profile/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="{{ URL('/') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
            <div class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item ">
            <a href="{{url('/')}}" class="nav-link {{ $segment == '' ? 'active' : '' }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item ">
             <a class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Interface
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview  {{ $segment == 'users' || $segment == 'roles' || $segment == 'permissions' ? 'menu-open' : '' }}  ">
            <a href="#" class="nav-link {{ $segment == 'users' || $segment == 'roles' || $segment == 'permissions' ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit  "></i>
              <p>
              User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview   {{ ($segment == 'users') ? 'menu-open' : '' }} ">
                <a href="#" class="nav-link  {{ ($segment == 'users' ) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                  User
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('users.create')}}" class="nav-link   {{ $segment == 'users' && $segment1 == 'create' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create User</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link {{ $segment == 'users' && $segment1 == '' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Users</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview  {{ ($segment == 'roles') ? 'menu-open' : '' }} ">
                <a href="#" class="nav-link {{ ($segment == 'roles' ) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                  Role
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('roles.create')}}" class="nav-link  {{ $segment == 'roles' && $segment1 == 'create' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Role</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link  {{ $segment == 'roles' && $segment1 == '' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Role</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview  {{ ($segment == 'permissions') ? 'menu-open' : '' }} ">
                <a href="#" class="nav-link {{ $segment == 'permissions'? 'active' : '' }}">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                  Permission
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('permissions.create')}}" class="nav-link {{ $segment == 'permissions' && $segment1 == 'create' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Permission</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('permissions.index')}}" class="nav-link {{ $segment == 'permissions' && $segment1 == '' ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Permission</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{ ($segment == 'rooms') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ ($segment == 'rooms' ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Room Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('rooms.create')}}" class="nav-link  {{ $segment == 'rooms' && $segment1 == 'create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('rooms.index')}}" class="nav-link  {{ $segment == 'rooms' && $segment1 == '' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Rooms</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{ ($segment == 'customerss') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ ($segment == 'customerss' ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Customer Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('customerss.create')}}" class="nav-link  {{ $segment == 'customerss' && $segment1 == 'create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('customerss.index')}}" class="nav-link  {{ $segment == 'customerss' && $segment1 == '' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{ ($segment == 'bookings') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ ($segment == 'bookings' ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Room Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('bookings.create')}}" class="nav-link  {{ $segment == 'bookings' && $segment1 == 'create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bookings.index')}}" class="nav-link  {{ $segment == 'bookings' && $segment1 == '' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Booking</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{ ($segment == 'payments') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ ($segment == 'payments' ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Room Booking payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('payments.index')}}" class="nav-link  {{ $segment == 'payments' && $segment1 == '' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View payments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview  {{ ($segment1 == 'report') ? 'menu-open' : '' }} ">
            <a href="#" class="nav-link {{ ($segment1 == 'report' ) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('customers.report')}}" class="nav-link  {{ $segment == 'customer' && $segment1 == 'report' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>customer Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('bookings.report')}}" class="nav-link  {{ $segment == 'booking' && $segment1 == 'report' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Booking Report</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('payments.report')}}" class="nav-link  {{ $segment == 'payment' && $segment1 == 'report' ? 'active' : '' }}">  {{method_field('POST')}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Report</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>


             {{-- <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Mail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/mail')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Mail </p>
                </a>
              </li>
            </ul>
          </li> --}}









</div>
 <!-- /.Sidebar Menu -->
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
