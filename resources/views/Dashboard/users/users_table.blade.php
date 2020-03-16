<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover table-info">
                 
                <thead class="table-header"  >
                  <tr>
                    <th><i></i> No.</th>
                    <th><i class="fa fa-bullhorn"></i> Surname</th>
                    <th class="hidden-phone"><i class="fa fa-phone"></i> other Name</th>
                    <th><i class="fa fa-bookmark"></i>Contact</th>
                    <th><i class=" fa fa-users"></i>Email Adress</th>
                    <th><i class=" fa fa-users"></i>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($users as $index=>$workers)
                  <tr class="tdh">
                    <td>{{$index+1}}</td>
                    <td>{{ $workers['surname'] }} </td>
                    <td class="hidden-phone">{{ $workers['firstname'] }} </td>
                    <td>{{ $workers['contact'] }}  </td>
                    <td>{{ $workers['email'] }}</td>
                    <td>{{ $workers['createdAt'] }}</td>
                    <td>
                       <button class="btn btn-success btn-xs"><a style="color:white" href="{{route('users.show', $workers['userId'])}}" class="fa fa-check"></a></button>
                      <button class="btn btn-danger btn-xs">
                        <a style="color:white"  href="#" >
                             <form  action="{{ route('users.destroy',  $workers['userId']) }}" method="post">
                                @csrf
                                 @method('delete')
                                 <i class="fa fa-trash text-red fa-lg" onclick="confirm('{{ __("Are you sure you want to delete this agent?") }}') ? this.parentElement.submit() : ''"></i>
                       </form>

                        </a>
                      </button>
                     
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