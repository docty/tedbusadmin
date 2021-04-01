@extends('Dashboard.container')

@section('content')
   <div class="content-wrapper">
      <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-users"></i>
         </div>
         <div class="header-title">
            <h1>Bus</h1>
            <small>Bus Loading</small>
         </div>
      </section>
      <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        
                        <div class="panel-body">
                           @include('Dashboard.buses.loading_table')
                           
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
         await fetch(`/set-bus-action?id=${id}&action=moving`);
         window.location = '/bus-loading';
      }
   </script>
@endpush