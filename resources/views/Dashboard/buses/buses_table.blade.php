<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Company Name</th>
           <th>Bus Name</th>
           <th>Number Plate</th>
           <th>Capacity</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($buses as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->companyName}}</td>
          <td>{{$item->busName}}</td>
          <td>{{$item->numberPlate}}</td>
          <td>{{$item->capacity}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>