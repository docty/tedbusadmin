@extends('Dashboard.container')

@section('content')
   <div class="content-wrapper">
      <section class="content-header">
         <div class="header-icon">
            <i class="fa fa-users"></i>
         </div>
         <div class="header-title">
            <h1>Partner</h1>
            <small>Partner List</small>
         </div>
      </section>
      <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="javascript:void(0)">
                                 <h4>Add Partner</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="/partners/create"> <i class="fa fa-plus"></i> Add Partner
                                 </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="{{asset('assets/dist/img/csv.png')}}" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="{{asset('assets/dist/img/xls.png')}}" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="{{asset('assets/dist/img/pdf.png')}}" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>
                           @include('Dashboard.partners.partners_table')
                           
                        </div>
                     </div>
                  </div>
               </div>
               
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                   
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
   
@endsection

@push('internalScript')
    <script>
         function onDelete(id){ 
            const csrf = document.querySelector('meta[name="csrf-token"]').content;

            const element = '<div class="modal-dialog">'+
               '<div class="modal-content">'+
                  '<div class="modal-header modal-header-primary">'+
                     '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
                     '<h3><i class="fa fa-user m-r-5"></i> Delete Partner</h3>'+
                  '</div>'+
                  '<div class="modal-body">'+
                     '<div class="row">'+
                        '<div class="col-md-12">'+
                           `<form class="form-horizontal" method="POST" action="/partners/${id}">`+
                              `<input type="hidden" name="_token" value="${csrf}">`+
                              '<input type="hidden" name="_method" value="delete">'+
                              '<fieldset>'+
                                 '<div class="col-md-12 form-group user-form-group">'+
                                    '<label class="control-label">Are you sure to delete partner</label>'+
                                    '<div class="pull-right">'+
                                       '<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="margin-right:0.5rem">NO</button>'+
                                       '<button type="submit" class="btn btn-add btn-sm">YES</button>'+
                                    '</div>'+
                                 '</div>'+
                              '</fieldset>'+
                           '</form>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
               '</div>'+
            '</div>';
            const container = document.getElementById('customer2');
            container.innerHTML = element;
         }
    </script>
@endpush