@extends('Dashboard.container')

@section('content')
   <div class="content-wrapper">
      <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-users"></i>
         </div>
         <div class="header-title">
            <h1>Bus</h1>
            <small>Bus Awaiting</small>
         </div>
      </section>
      <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        
                        <div class="panel-body">
                           @include('Dashboard.buses.moving_table')
                           
                        </div>
                     </div>
                  </div>
               </div>
               
                
            </section>
            <!-- /.content -->
         </div>
   
@endsection

@push('internalScript')
   <script>
      async function onChangeState(id) {
         await fetch(`/set-bus-action?id=${id}&action=awaiting`);
         window.location = '/bus-moving';
      }
   </script>
@endpush