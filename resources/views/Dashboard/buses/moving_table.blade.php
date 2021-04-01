<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Company Name</th>
           <th>Number Plate</th>
           <th>Filled</th>
           <th>Available</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($buses as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->companyName}}</td>
          <td>{{$item->numberPlate}}</td>
          <td>{{$item->filled}}</td>
          <th>{{$item->capacity - $item->filled}}</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm" onclick="onChangeState({{$item->id}})"><i class="fa fa-arrow-circle-right"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>