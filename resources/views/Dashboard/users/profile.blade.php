@extends('Dashboard.container')

@section('sider')

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="../img/apple-touch-icon.png" class="img-circle" width="80"></a></p>
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
              <span>Payment</span>
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
      <section class="wrapper site-min-height">

        <div class="row mt">
          
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  
                  <h4>USER ID</h4>
                  <p>{{$staff['0']['userId']}}</p>
                   
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>{{$staff['0']['surname']}} {{$staff['0']['firstname']}}</h3>
                
                 
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                   
                   
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
           <div class="col-lg-12 mt">
            <div class="content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li >
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#customer" class="contact-map">Booking</a>
                  </li>
                   
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane ">
                    @foreach($staff as $worker)
                     <h5 style="font-weight: bold;">Full Name</h5>
                     <h5>{{$worker['surname']}} {{$worker['firstname']}}</h5>
                     <h5 style="font-weight: bold;">Phone Number</h5>
                     <h5>{{$worker['contact']}}</h5>
                     <h5 style="font-weight: bold;">Email</h5>
                     <h5>{{$worker['email']}}</h5>
                     @endforeach
                  </div>
                  <!-- /tab-pane -->
                  <div id="customer" class="tab-pane active">
                    <div class="row">
                         
                       @include('Dashboard.users.booking_table')
                         
                     </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                   
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->

@endsection