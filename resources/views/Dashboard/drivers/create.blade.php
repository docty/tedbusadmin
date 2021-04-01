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
         <h1>Add Driver</h1>
         <small>Driver list</small>
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
                     <a class="btn btn-add " href="/drivers"> 
                     <i class="fa fa-list"></i>  Driver List </a>  
                  </div>
               </div>
               <div class="panel-body">
                  <form class="col-sm-6" method="POST" action="{{route('drivers.store')}}">
                     @csrf
                     <div class="form-group">
                        <label>Company Name</label>
                        <select class="form-control" name="companyName" required>
                           <option value=''></option>
                           @foreach ($partners as $item)
                              <option value={{$item->companyName}}>{{$item->companyName}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Driver Name</label>
                        <input type="text" class="form-control" placeholder="Enter Driver Name" name="driverName" required>
                     </div>
                     <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phoneNumber" required>
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