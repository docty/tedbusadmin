@extends('Dashboard.container')

@section('sider')

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/apple-touch-icon.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Tedbus Admin</h5>
          <li class="mt">
            <a  href="/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a class="active" href="/users">
              <i class="fa fa-user"></i>
              <span>Users </span>
              {{-- <span class="label label-theme pull-right mail-info">2</span> --}}
              </a>
          </li>
          <li>
            <a href="/busbooking">
              <i class="fa fa-users"></i>
              <span>Bus Booking </span>
              </a>
          </li>
          <li>
            <a href="/payment">
              <i class="fa fa-users"></i>
              <span>Payment </span>
              </a>
          </li>
    

          
           
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>



@endsection


@section('maincontent')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
            <div class="showback">
                <a type="submit" href="{{ route('users.create') }}" class="btn btn-theme03">Add New User</a>
                 <input type="search" class="light-table-filter search" data-table="table-info" placeholder="Search">
            </div>
            <!-- Create a table for all -->
            @include('Dashboard.users.users_table')
             <!-- End of table -->
        </div>
      </section>
    </section>
    <!--main content end-->

@endsection