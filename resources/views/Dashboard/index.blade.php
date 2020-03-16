@extends('Dashboard.container')

@section('sider')

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/apple-touch-icon.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Tedbus Admin</h5>
          <li class="mt">
            <a class="active"  href="/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a  href="/users">
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
            @include('Dashboard.dashboard_middle_left')
            @include('Dashboard.dashboard_middle_right')
        </div>
      </section>
    </section>
    <!--main content end-->

@endsection