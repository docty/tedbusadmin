<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>Full Name</th>
           <th>Mobile</th>
           <th>Email</th>
           <th>Address</th>
           <th>Action</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($users as $item)
       <tr>
          <td>{{$item->name}}</td>
          <td>0247049416</td>
          <td>{{$item->email}}</td>
          <td>AK-256-5656, Tanoso-Kumasi</td>
          <td>
            <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
          </td>
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>