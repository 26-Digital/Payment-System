@extends('layouts.frontend')
@section('title')
Dashboard
@stop
@section('content')
    <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('agents')}}">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="font-large-2 white fa fa-user-o menu-icon"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Agents</h5>
                    <h5 class="text-bold-400 mb-0">{{$agents->count()}}</h5>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('leads')}}">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="font-large-2 white fa fa-tty menu-icon"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>Leads</h5>
                    <h5 class="text-bold-400 mb-0">{{$leads->count()}}</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('students')}}">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="font-large-2 white fa fa-user-o menu-icon"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Students</h5>
                    <h5 class="text-bold-400 mb-0">{{$students->count()}}</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('contracts')}}">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="font-large-2 white fa fa-file menu-icon"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Contracts</h5>
                    <h5 class="text-bold-400 mb-0">{{$contracts->count()}}</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>
    </div>
    <div class="row">
      <div class="col-xl-8 col-lg-12">
        <div class="card">
          <div class="card-header border-0-bottom">
            <h4 class="card-title"><strong>Todo</strong><span id="addtodo"><button class="btn btn-sm btn-primary">Add</button></span></h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><strong>{{$date}}</strong></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div id="todo"></div>
            <div id="daily-activity" class="table-responsive height-350">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>
                    </th>
                    <th>Time</th>
                    <th>Activity</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @if($todos->count()>0)
                  @foreach($todos as $todo)
                    <tr>
                      <td class="text-truncate">
                        <form action="{{route('update.todo',['id'=>$todo->id])}}" method="post">
                          @csrf
                          @if($todo->status==1)
                          <button id="updateTodo" type="submit" class="btn btn-primary btn-sm" disabled><span class="fa fa-check"></span>
                          @else
                          <button id="updateTodo" type="submit" class="btn btn-danger btn-sm"><span class="fa fa-eye"></span>
                          @endif
                          </button>
                          
                        </form>
                      </td>
                      <td class="text-truncate">{{$todo->time}}</td>
                      <td class="text-truncate">{{$todo->activity}}</td>
                      <td class="text-truncate">
                        @if($todo->status == 0)
                        <span class="badge badge-default badge-info">Pending</span>
                        @elseif($todo->status == 1)
                        <span class="badge badge-default badge-success">Done</span>
                        @elseif($todo->status == 2)
                        <span class="badge badge-default badge-warning">Delayed</span>
                        @elseif($todo->status == 3)
                        <span class="badge badge-default badge-delete">Missed</span>
                        @endif
                      </td>
                    </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            
              <div class="text-center">
                {{-- <input type="text" name="date" hidden value="{{$date}}"> --}}
                <a class="btn btn-sm btn-warning" href="{{route('todos',['target_date'=>$date])}}"  style="margin-top: 7px">All Todos</a>
              </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-12 border-right-blue-grey">
        <div class="card">
            <div class="card-content">
              <div class="card-body">
                <p class="text-center">
                  <strong>Total Leads</strong>
                  <span class="text-muted">{{'('.$leads->count().')'}}</span>
                </p><hr>

                <a href="{{route('interested.leads')}}" style="color: black">
                <h6 class="text-bold-500 mt-1 mb-0">Interested: <strong>{{$interested_leads->count()}} Leads</strong></h6>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 
                  @if($leads->count()>0)
                  {{(($interested_leads->count()/$leads->count())*100)}}%
                  @else
                  0%
                  @endif" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                  </div><br></a>
              
                <a href="{{route('notInterested.leads')}}" style="color: black">
                <h6 class="text-bold-500 mt-1 mb-0">Not-Interested: <strong>{{$not_interested_leads->count()}} leads</strong></h6>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 
                  @if($leads->count()>0)
                  {{(($not_interested_leads->count()/$leads->count())*100)}}%
                  @else
                  0%
                  @endif" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div><br></a>
              
                <a href="{{route('followUp.leads')}}" style="color: black">
                <h6 class="text-bold-500 mt-1 mb-0">Follow-up: <strong>{{$follow_up_leads->count()}} leads</strong></h6>
                <div class="progress progress-sm mt-1 mb-0">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 
                  @if($leads->count()>0)
                  {{(($follow_up_leads->count()/$leads->count())*100)}}%
                  @else
                  0%
                  @endif" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div><br></a><hr>
              

              <form action="{{route('lead.report')}}" method="post" >
                @csrf
                
                  <div class="form-group" >
                  <label for="interested">Interested</label>
                  <input type="checkbox" name="interested[]" value="interested" checked>&nbsp;&nbsp;
                  <label for="Not-interested">Not-Interested</label>
                  <input type="checkbox" name="interested[]" value="Not-interested" checked>&nbsp;
                  <label for="Follow-up">Follow-Up</label>
                  <input type="checkbox" name="interested[]" value="Follow-up" checked>
                  </div>
                  <div class="text-center">
                    <span><button type="submit" class="btn btn-info btn-sm">Report</button></span>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
                <div class="text-center">
                  <strong>Total Students</strong>
                  <span class="text-muted">{{'('.$students->count().')'}}</span>
                </div><hr>
              <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix">
                  <p><strong>Offer Letter Given:</strong>
                    <span class="text-muted"><strong>{{$offer_letter->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('offer_letter.report')}}" class="btn btn-success btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" style="width: @if($students->count()>0)
                    {{(($offer_letter->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <hr>
               
                  <p><strong>L.O.A Received:</strong>
                    <span class="text-muted"><strong>{{$LOA->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('LOA.report')}}" class="btn btn-dark btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 
                    @if($students->count()>0)
                    {{(($LOA->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif
                    " aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Visa Submission:</strong>
                    <span class="text-muted"><strong>{{$visa_sub->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('visa.report')}}" class="btn btn-info btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-info" role="progressbar" style="width: @if($students->count()>0)
                    {{(($visa_sub->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                  <p><strong>Refund:</strong>
                    <span class="text-muted"><strong>{{$refund->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('refund.report')}}" class="btn btn-danger btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: @if($students->count()>0)
                    {{(($refund->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Application fee:</strong>
                    <span class="text-muted"><strong>{{$application->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('applicationFee.report')}}" class="btn btn-warning btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: @if($students->count()>0)
                    {{(($application->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Tuition fee:</strong>
                    <span class="text-muted"><strong>{{$tuition->count()}} Students</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('tuitionFee.report')}}" class="btn btn-light btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-light" role="progressbar" style="width: @if($students->count()>0)
                    {{(($tuition->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="card-body">
                <div class="text-center">
                  <strong>Total Agent</strong>
                  <span class="text-muted">{{'('.$agents->count().')'}}</span>
                </div><hr>
              <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 border-right-blue-grey border-right-lighten-5 clearfix">
                  <p><strong>Interested:</strong>
                    <span class="text-muted"><strong>{{$interested_agents->count()}} Agents</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('interestedAgents.report')}}" class="btn btn-success btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" style="width: @if($agents->count()>0)
                    {{(($interested_agents->count()/$agents->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <hr>
               
                  <p><strong>Proposal Sent:</strong>
                    <span class="text-muted"><strong>{{$proposal_sent_agents->count()}} Agents</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('proposalSentAgents.report')}}" class="btn btn-dark btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 
                    @if($agents->count()>0)
                    {{(($proposal_sent_agents->count()/$agents->count())*100)}}%
                    @else
                    0%
                    @endif
                    " aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Document Received:</strong>
                    <span class="text-muted"><strong>{{$document_received_agents->count()}} Agents</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('documentReceivedAgents.report')}}" class="btn btn-info btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-info" role="progressbar" style="width: @if($agents->count()>0)
                    {{(($document_received_agents->count()/$agents->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                  <p><strong>Agreement Sent To Agent:</strong>
                    <span class="text-muted"><strong>{{$agreement_sent_agents->count()}} Agents</strong></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="{{route('agreementSentAgents.report')}}" class="btn btn-danger btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: @if($students->count()>0)
                    {{(($agreement_sent_agents->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Agreement Signed By Agent:</strong>
                    <span class="text-muted"><strong>{{$agreement_signed_agent_agents->count()}} Agents</strong></span>
                    <span><a href="{{route('agreementSignedAgents.report')}}" class="btn btn-warning btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: @if($students->count()>0)
                    {{(($agreement_signed_agent_agents->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div><hr>
                
                  <p><strong>Agreement Signed By College</strong>
                    <span class="text-muted"><strong>{{$agreement_signed_college_agents->count()}} Agents</strong></span><span><a href="{{route('agreementSignedCollege.report')}}" class="btn btn-light btn-sm">Report</a></span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar bg-light" role="progressbar" style="width: @if($students->count()>0)
                    {{(($agreement_signed_college_agents->count()/$students->count())*100)}}%
                    @else
                    0%
                    @endif" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5><strong>Agents ({{$agents->count()}})</strong></h5>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <a href="{{route('agent.report')}}" class="btn btn-primary btn-sm">Report</a>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div id="friends-activity" class="media-list ">
                  @if($agent_five->count()>0)
                  <?php $i=1; ?>
                  @foreach($agent_five as $agent)
                  <div class="media border-0">
                    <div class="media-left pr-1">
                      <strong>{{$i++."."}}</strong>
                    </div>
                    <div class="media-body w-100">
                      <h5 class="list-group-item-heading"><strong>{{$agent->name}}</strong>

                      </h5>
                      <p class="list-group-item-text mb-0">
                        <a href="{{route('studentList',['id'=>$agent->id])}}"><span class="btn btn-sm btn-info">Students</span></a>
                        <a href="{{route('summary',['id'=>$agent->id])}}"><span class="btn btn-sm btn-success">Summary</span></a>
                        <a href="{{route('agent.contracts',['id'=>$agent->id])}}"><span class="btn btn-sm btn-warning">Contracts</span></a>
                      </p>
                        <span class="font-small-2 float-right">{{$agent->created_at->toDateString()}}</span>
                      <hr>
                    </div>
                  </div>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
      </div>
    </div> 
@endsection
@section('js')

  <script type="text/javascript">
  $(document).ready(function(){
    $("#addtodo").click(function(){
      var name = '<form action="{{route('add.todo')}}" method="post">@csrf<table class="table table-hover mb-0"><thead><tr><th>Date</th><th>Time</th><th>Activity</th></tr></thead><tbody><td><input type="date" name="date" class="form-control" value="{{$date}}"></td><td><input type="time" name="time" class="form-control" value="{{$time}}"></td><td><input type="text" name="activity" class="form-control"></td></tbody></table><div class="text-center"><button class="btn btn-sm btn-success" type="submit">Save</button></div><br></form>';

      var disabled = '<button class="btn btn-sm btn-primary" disabled>Add</button>'
      $('#addtodo').html(disabled);
      $("#todo").append(name);  
      });
  });

  // $(document).ready(function(){
  //   $("#update").click(function(){
  //   document.getElementById('updateTodo').click();
  //   });
  // }):

    function SomeDeleteRowFunction(btndel) {
    if (typeof(btndel) == "object") {
        $(btndel).closest('.row').remove();
    } else {
        return false;
    }
  }
  </script>

@endsection
{{-- <div class="container">
<div class="row">
    <div class="col-lg-4">
        <a href="{{route('agents')}}">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Total Agents</div>
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">{{$agents->count()}}</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="{{route('students')}}" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Total Students</div>
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">{{$students->count()}}</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="{{route('leads')}}" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">Total Leads</div>
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">{{$leads->count()}}</h3>
                </div>
            </div>
        </a>
    </div>
</div>
</div> --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}


