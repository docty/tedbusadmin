<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Full Name</th>
           <th>Mobile</th>
           <th>Email</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($customers as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->lastName}} {{$item->firstName}}</td>
          <td>{{$item->mobile}}</td>
          <td>{{$item->email}}</td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" onclick="onDelete({{$item->id}})" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>