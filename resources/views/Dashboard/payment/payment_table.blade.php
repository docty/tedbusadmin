<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover tablesorter table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Bus Id</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Amount</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Date Created</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($staff as $index=>$workers)
                  <tr class="tdh">
                    <td>{{$index+1}}</td>
                    <td>{{ $workers->busId }} </td>
                    <td class="hidden-phone">{{ $workers->amount }} </td>
                    <td>{{ $workers->created_at }}  </td>
                     
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>