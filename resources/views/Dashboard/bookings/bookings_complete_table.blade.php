<div class="table-responsive">
  <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
     <thead>
        <tr class="info">
           <th>SN</th>
           <th>Bus</th>
           <th>Source</th>
           <th>Destination</th>
           <th>Passenger</th>
           <th>Price</th>
           <th>Date</th>
        </tr>
     </thead>
     <tbody>
       @foreach ($bookings as $index=>$item)
       <tr>
          <td>{{$index+1}}</td>
          <td>{{$item->busName}}</td>
          <td>{{$item->source}}</td>
          <td>{{$item->destination}}</td>
          <td>{{$item->passenger}}</td>
          <td>{{$item->price}}</td>
          <td>{{$item->depDate}}</td>
          
       </tr>
       @endforeach
        
     </tbody>
  </table>
</div>