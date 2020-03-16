@extends('Dashboard.container')

@section('sider')

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/apple-touch-icon.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Mos Loans</h5>
          <li class="mt">
            <a  href="/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a class="active" href="/staff">
              <i class="fa fa-user"></i>
              <span>Staff </span>
              {{-- <span class="label label-theme pull-right mail-info">2</span> --}}
              </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Customer </span>
              </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Loan Book</span>
              </a>
          </li>
          <li>
            <a  href="#">
              <i class="fa fa-calendar-o"></i>
              <span>Payment Schedule </span>
              </a>
          </li>

          
           
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

<!-- Please Ignore these codes
    {{-- <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li> --}}



@endsection


@section('maincontent')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
            <div class="showback">
                <a type="submit" href="{{ route('staff.create') }}" class="btn btn-theme03">Add New Staff</a>
            </div>
            <!-- Create a table for all -->
            @include('Dashboard.staff.staff_table')
             <!-- End of table -->
        </div>
      </section>
    </section>
    <!--main content end-->

@endsection