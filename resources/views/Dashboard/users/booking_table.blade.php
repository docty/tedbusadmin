<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover tablesorter table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Bus Name</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Price</th>
                    <th><i class="fa fa-bookmark"></i> Date / Time</th>
                    <th><i class="fa fa-bookmark"></i> Passengers</th>
                    <th><i class="fa fa-bookmark"></i> Luggages</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($staff['0']['Busdetails'] as $index=>$workers)
                    <tr class="tdh">
                        <td>{{$index+1}}</td> 
                        <td>{{ $workers['busname'] }} </td>
                        <td class="hidden-phone">{{ $workers['price'] }} </td>
                        <td>{{ $workers['date'] }} /  {{ $workers['time'] }}  </td>
                        <td>{{ $workers['nop']}}  </td>
                        <td>{{ $workers['luggage']}}  </td>
                    </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>