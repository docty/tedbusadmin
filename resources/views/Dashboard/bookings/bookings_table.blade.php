<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Bus</th>
           <th>Source</th>
           <th>Destination</th>
           <th>Children</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($bookings as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->busName}}</td>
          <td>{{$item->source}}</td>
          <td>{{$item->destination}}</td>
          <td>{{$item->noOfChildren}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>