<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover table-info">
                 
                <thead>
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i>Bus Id</th>
                    <th><i class="fa fa-bullhorn"></i> Bus Name</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Price</th>
                    <th><i class="fa fa-bookmark"></i> Date / Time</th>
                    <th><i class="fa fa-bookmark"></i>Pick Up</th>
                    <th><i class="fa fa-bookmark"></i> Passengers</th> 
                    <th><i class="fa fa-bookmark"></i> Status</th> 
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($customer as $index=>$workers)
                  <tr class="tdh">
                    <td>{{$index+1}}</td>
                    <td>{{ $workers['busId'] }} </td>
                    <td>{{ $workers['busname'] }} </td>
                    <td class="hidden-phone">{{ $workers['price'] }} </td>
                    <td>{{ $workers['date'] }}/ {{ $workers['time'] }}  </td>
                     
                    <td>{{ $workers['pip'] }}  </td>
                    <td>{{ $workers['nop'] }}  </td>
                    @if( $workers['status'] == 'Unpaid')
                    <td class="btn " style="background-color: #EE753C">{{ $workers['status'] }}</td>
                    <td>
                      @else
                    <td class="btn " style="background-color: green; color: white">{{ $workers['status'] }}</td>
                    <td>
                      @endif
                      
                      <button class="btn btn-success btn-xs"><a style="color:white" href="{{route('busbooking.show', $workers['busId'])}}" class="fa fa-check"></a></button>
                      <button class="btn btn-primary btn-xs"><a style="color:white" class="fa fa-pencil" href="{{route('busbooking.edit', $workers['busId'])}}"></a></button>
                       
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>