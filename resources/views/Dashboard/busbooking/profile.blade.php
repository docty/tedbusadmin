@extends('Dashboard.container')

@section('sider')

<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="../img/apple-touch-icon.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Mos Loans</h5>
          <li class="mt">
            <a  href="/home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a  href="/staff">
              <i class="fa fa-user"></i>
              <span>Staff </span>
              {{-- <span class="label label-theme pull-right mail-info">2</span> --}}
              </a>
          </li>
          <li>
            <a class="active" href="/customer">
              <i class="fa fa-users"></i>
              <span>Customer </span>
              </a>
          </li>
          <li>
            <a href="/loan">
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
      <section class="wrapper site-min-height">

        <div class="row mt">
          <div class="showback">
                <a type="submit" href="{{ route('customer.edit', $customer->urlId) }}" class="btn btn-theme03">Edit Customer</a>
                <a type="submit" href="{{ route('payment.create') }}" class="btn btn-theme03">Make Payment</a>
          </div>
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>OFFICER</h4>
                  <p>{{$customer->staff->surname }} {{$customer->staff->otherName}}</p>
                  <h4>CUSTOMER ID</h4>
                  <p>{{$customer->customerId}}</p>
                   
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>{{$customer->surname}} {{$customer->otherName}}</h3>
                <h6>Santasi / Ashanti Region</h6>
                 
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="" class="img-circle" alt="No Image Yet"></p>
                   
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
            <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Payment</a>
                  </li>
                  <li >
                    <a data-toggle="tab" href="#customer" class="contact-map">Loans</a>
                  </li>
                   
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active ">
                     <div class="row">
                         
                       @include('Dashboard.customer.payment_table')
                         
                     </div>
                     
                  </div>
                  <!-- /tab-pane -->
                  <div id="customer" class="tab-pane ">
                    <div class="row">
                         
                       @include('Dashboard.customer.loan_table')
                         
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