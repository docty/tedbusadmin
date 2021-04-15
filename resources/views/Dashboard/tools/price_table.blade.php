<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Company Name</th>
           <th>Source</th>
           <th>Destination</th>
           <th>Tag</th>
           <th>Amount</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($price as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->companyName}}</td>
          <td>{{$item->source}}</td>
          <td>{{$item->destination}}</td>
          <td>{{$item->busTag}}</td>
          <td>{{$item->amount}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" onclick="onDelete({{$item->id}})" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>