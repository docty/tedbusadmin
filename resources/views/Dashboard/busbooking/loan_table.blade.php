<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover tablesorter table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Payment Type</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> Month</th>
                    <th><i class="fa fa-bookmark"></i> Principal</th>
                    <th><i class="fa fa-bookmark"></i> Rate</th>
                    <th><i class="fa fa-bookmark"></i> Amount </th>
                    <th><i class="fa fa-bookmark"></i> Start Date</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($customer->loan as $index=>$workers)
                    <tr class="tdh">
                        <td>{{$index+1}}</td> 
                        <td>{{ $workers->paymentType }}  </td>
                        <td>{{ $workers->months }}  </td>
                        <td>{{ $workers->principal }}</td>
                        <td class="hidden-phone">{{ $workers->totalAmount }} </td>
                        <td>{{ $workers->interestRate }}  </td>
                        <td>{{ $workers->startDate }}  </td>
                         
                    </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>