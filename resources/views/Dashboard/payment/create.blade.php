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
                <h3>Make Payment</h3>
            </div>
            <!-- Create a table for all -->
            <div class="row mt" >
              <div class="col-lg-8 col-lg-offset-2  center">
                <div class="form-panel">
                  <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('payment.store')}}">
                  @csrf
                  <div class="form-group ">
                    <label for="customerId" class="control-label col-lg-2">Customer Id</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="customerId" name="customerId" type="text" required placeholder="1234567" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="loanId" class="control-label col-lg-2">Loan Id</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="loanId" name="loanId" type="text" required  placeholder="1234567" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="amount" class="control-label col-lg-2">Amount</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="amount" name="amount" type="number" maxlength="15" required placeholder="10" />
                    </div>
                  </div>
                  
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Staff Id</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="staffId" name="staffId" type="text" maxlength="7" minlength="7" required placeholder="1234567" />
                    </div>
                  </div>
                    
                   
                   
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Pay</button>
                       
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
                   </div>
                </div>
          
        </div>
      </section>
    </section>
    <!--main content end-->

@endsection