@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    @if ($errors->any())
    <div class="card deep-orange darken-4 white-text center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method = 'POST' action = '{!! url("goal")!!}/{!!$goal->
        id!!}/update'>
        {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Edit Goal</span>
                      <div class="input-field col s12">
                          <input id="goal_title" name = "goal_title" type="text" value="{!!$goal->goal_title!!}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="goal_title">Goal Title</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="goal_discerption" name = "goal_discerption" type="text" class="validate materialize-textarea" required>{!!$goal->goal_discerption!!}</textarea>
                          <label for="goal_discerption">Goal Description</label>
                      </div>
                      <button class = 'btn' type ='submit'>Update</button>
                    </div>
                  </div>
                </div>
              </div>
    </form>

            <!-- assign goals to users -->

                <div class="col s12">
            <div class="box box-primary">
                <div class="box-header">
                    <h5>Assign users to Goal: {{$goal->goal_title}}</h5>
                </div>
                <div class="row">
                <div class="col s4">
                <div class="box-body">
                    <form action="{{url('goal/addUserGoals')}}" method = "post">
                        {!! csrf_field() !!}
                        <input type="hidden" name = "goal_id" value = "{{$goal->id}}">
                        <div class="form-group">
                            <select name="user_id" id="" class = "form-control">
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      </div>
                      <div class="col s4">
                        <div class="form-group">
                            <button class = 'btn btn-primary'>Assign</button>
                        </div>
                      </div>
                    </form>

                    <!-- Assign Users To Goal -->
                    <div class="col s12">
                    @foreach($userGoals as $userGoal)
                      <a class='waves-effect waves-light btn grey hoverable' href='{{url('goal/removeUserGoals')}}/{{$userGoal->id}}/{{$goal->id}}' data-activates='goal-assign'><i class="material-icons left">cancel</i>{{$userGoal->name}}</a>
                    @endforeach
                  </div>
                  {{-- <div class="row">
                    <div class="col s12">
                    <div class="col s6">
                    <table class = 'table'>
                        <thead>
                            <th>Name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($userGoals as $userGoal)
                            <tr>
                                <td>{{$userGoal->name}}</td>
                                <td><a href="{{url('goal/removeUserGoals')}}/{{$userGoal->id}}/{{$goal->id}}" class = "delete btn-floating modal-trigger red"><i class = 'material-icons'>delete</i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
                </div>
            </div>
        </div>

</div>
@endsection
