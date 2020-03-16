<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover tablesorter table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Date</th>
                    <th><i class="fa fa-bookmark"></i> Loan Id</th>
                    <th><i class="fa fa-phone"></i> Paid</th>
                    <th><i class="fa fa-bookmark"></i> Balance</th>
                    <th><i class="fa fa-bookmark"></i> Debt</th>
                     
                  </tr>
                </thead>
                <tbody>
                   @foreach ($customer->payment as $index=>$workers)
                    <tr class="tdh">
                        <td>{{$index+1}}</td> 
                        <td>{{ $workers->created_at }}  </td>
                        <td>{{ $workers->loanId }}  </td>
                        <td>{{ $workers->paid }}  </td>
                        <td>{{ $workers->cBalance }}</td>
                        <td class="hidden-phone">{{ $workers->debt }} </td>
                         
                         
                    </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>