@extends('Dashboard.container')

@section('content')
   <div class="content-wrapper">
      <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-users"></i>
         </div>
         <div class="header-title">
            <h1>Bus</h1>
            <small>Bus Profile</small>
         </div>
      </section>
      <section class="content">
        <div class="row">
           <div class="col-sm-12 col-md-4">
              <div class="card">
                 <div class="card-header">
                    <div class="card-header-headshot"></div>
                 </div>
                 <div class="card-content">
                    <div class="card-content-member text-center">
                       <h4 class="m-t-0">{{$data->companyName}}</h4>
                       <p class="m-t-0">{{$data->busName}}</p>
                    </div>
                    
                 </div>
                 <div class="card-footer">
                    <div class="card-footer-stats">
                       <div>
                          <p>NUMBER PLATE:</p>
                          <span>{{$data->numberPlate}}</span>
                       </div>
                       <div>
                          <p>CAPACITY:</p>
                          <span>{{$data->capacity}}</span>
                       </div>
                       
                    </div>
                    
                 </div>
              </div>
           </div>
           
        </div>
     </section>
   </div>
      @endsection

@push('internalScript')
    
@endpush