<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover tablesorter table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Full Name</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Contact</th>
                    <th><i class="fa fa-bookmark"></i> Staff Id</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($staff->customer as $index=>$workers)
                    <tr class="tdh">
                        <td>{{$index+1}}</td> 
                        <td>{{ $workers->surname }} {{$workers->otherName}}</td>
                        <td class="hidden-phone">{{ $workers->phoneNumber }} </td>
                        <td>{{ $workers->customerId }}  </td>
                         
                    </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>