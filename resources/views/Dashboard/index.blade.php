@extends('Dashboard.container')

@section('content')
   <div class="content-wrapper">
      <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-users"></i>
         </div>
         <div class="header-title">
            <h1>Dashboard</h1>
            <small>Home</small>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
               <div id="cardbox1">
                  <div class="statistic-box">
                     <i class="fa fa-user-plus fa-3x"></i>
                     <div class="counter-number pull-right">
                        <span class="count-number">0</span> 
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                     </div>
                     <h3> Pending Booking</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
      
      
      <!-- ChartJs JavaScript -->
      <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      
@endsection 