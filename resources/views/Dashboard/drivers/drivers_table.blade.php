<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Company Name</th>
           <th>Driver Name</th>
           <th>Phone Number</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($drivers as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->companyName}}</td>
          <td>{{$item->driverName}}</td>
          <td>{{$item['phoneNumber']}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" onclick="onDelete({{$item->id}})" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> 
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>