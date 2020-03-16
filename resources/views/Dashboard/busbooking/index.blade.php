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
            <a  href="/users">
              <i class="fa fa-user"></i>
              <span>Users </span>
              {{-- <span class="label label-theme pull-right mail-info">2</span> --}}
              </a>
          </li>
          <li>
            <a class="active" href="/busbooking">
              <i class="fa fa-users"></i>
              <span>Bus Booking </span>
              </a>
          </li>
          <li>
            <a  href="/payment">
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
                <a type="submit" href="{{ route('busbooking.create') }}" class="btn btn-theme03">Add New Request</a>
                <a type="submit" href="#" class="btn btn-theme02" data-toggle="modal" data-target="#agentModal" aria-haspopup="true" aria-expanded="false">Payment</a>
                <input type="search" class="light-table-filter search" data-table="table-info" placeholder="Search">

            </div>
            <!-- Create a table for all -->
            @include('Dashboard.busbooking.booking_table')
             <!-- End of table -->
              <div class="modal" id="agentModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <!-- Modal Header -->
                     <div class="modal-header">
                      <h3 class="modal-title">Payment Details</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                                                    
                       <!-- Modal body -->
                                                    
                        <div class="modal-body">
                          <form class="form-horizontal" id="payForm" method="post" action="{{route('payment')}}">
                            @csrf
                            <div class="form-inline">
                              <label class="form-control-label col-sm-3" for="input-farmername">{{ __('Bus Id:') }}</label>
                              <input type="text"  id="input-name" class="form-control col-sm-9" name="busId" >
                            </div>
                            <br>
                            <div class="form-inline">
                              <label class="form-control-label col-sm-3" for="input-phonenumber">{{ __('Amount:') }}</label>
                              <input type="text"  id="input-phonenumber" class="form-control col-sm-9" name="amount" >
                            </div>
                            <br>
                          </form>
                        </div>
                         <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button  type="button" onclick="getElementById('payForm').submit()" class="btn btn-success" >Submit</button>
                        </div>
                                                    
                      </div>
                  </div>
              </div>
                                    
        </div>
      </section>
    </section>
    <!--main content end-->

@endsection