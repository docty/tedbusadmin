<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Company </th>
           <th>Source Region</th>
           <th>source</th>
           <th>Destination Region</th>
           <th>Destination</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($partners as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->companyName}}</td>
          <td>{{$item->sourceRegion}}</td>
          <td>{{$item->source}}</td>
          <td>{{$item->destinationRegion}}</td>
          <td>{{$item->destination}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" onclick="onDelete({{$item->id}})" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>