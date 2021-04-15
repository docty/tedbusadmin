@extends('Dashboard.container')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-users"></i>
      </div>
      <div class="header-title">
         <h1>Add Staff</h1>
         <small></small>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- Form controls -->
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist"> 
                     <a class="btn btn-add " href="/users"> 
                     <i class="fa fa-list"></i>  Staff List </a>  
                  </div>
               </div>
               <div class="panel-body">
                  <form class="col-sm-6" method="POST" action="{{route('users.store')}}">
                     @csrf
                     <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" required>
                     </div>
                     <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter last Name" name="lastName" required>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                     </div>
                     <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile" name="mobile" required>
                     </div>
                      
                     <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" name="address" required></textarea>
                     </div>
                     <div class="form-group">
                        <label>Gender</label><br>
                        <label class="radio-inline"><input name="gender" value="Male" checked="checked" type="radio">Male</label> 
                        <label class="radio-inline"><input name="gender" value="Female" type="radio">Female</label>
                     </div>
                     <div class="reset-button">
                       
                        <button type="submit" class="btn btn-success">Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection