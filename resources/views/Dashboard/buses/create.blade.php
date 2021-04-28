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
         <h1>Add Bus</h1>
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
                     <a class="btn btn-add " href="/partners"> 
                     <i class="fa fa-list"></i>  Bus List </a>  
                  </div>
               </div>
               <div class="panel-body">
                  <form class="col-sm-6" method="POST" action="{{route('buses.store')}}">
                     @csrf
                     <div class="form-group">
                        <label>Company Name</label>
                        <select class="form-control" name="companyName" required>
                           <option value=''></option>
                           @foreach ($partners as $item)
                              <option value="{{$item->companyName}}">{{$item->companyName}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Bus Name</label>
                        <input type="text" class="form-control" placeholder="Enter Bus Name" name="busName" required>
                     </div>
                     <div class="form-group">
                        <label>Number Plate</label>
                        <input type="text" class="form-control" placeholder="Enter Number Plate" name="numberPlate" required>
                     </div>
                     <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" class="form-control" placeholder="Enter Capacity" name="capacity" required>
                     </div>
                     <div class="form-group">
                        <label>Bus Tag</label>
                        <input type="text" class="form-control" placeholder="First Class" name="busTag" required>
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