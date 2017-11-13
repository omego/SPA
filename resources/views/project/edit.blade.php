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


    <form method = 'POST' action = '{!! url("project")!!}/{!!$project->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Edit Project</span>
                      <div class="input-field col s12">
                          <input id="project_title" name = "project_title" type="text" value="{!!$project->project_title!!}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="project_title">Project Number</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="project_discerption" name = "project_discerption" type="text" class="validate materialize-textarea" required>{!!$project->project_discerption!!}</textarea>
                          <label for="project_discerption">Project Description</label>
                      </div>
                      <div class="input-field col s12">
                          <select name = 'goal_id'>
                              @foreach($goals as $key => $value)
                              @if ($key == $project->goal_id)
                              <option selected value="{{$key}}">{{$value}}</option>
                              @else
                              <option value="{{$key}}">{{$value}}</option>
                              @endif
                              @endforeach
                          </select>
                          <label>Select a Goal</label>
                      </div>
                      <button class = 'btn' type ='submit'>Update</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- assign projects to users -->

                <div class="col s12">
            <div class="box box-primary">
                <div class="box-header">
                    <h5>Assign users to Project: {!!$project->project_title!!}</h5>
                </div>
                <div class="row">
                <div class="col s4">
                <div class="box-body">
                    <form action="{{url('project/addUserProjects')}}" method = "post">
                        {!! csrf_field() !!}
                        <input type="hidden" name = "project_id" value = "{{$project->id}}">
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


                    <div class="col s12">
                    @foreach($userProjects as $userProject)
                      <a class='waves-effect waves-light btn grey hoverable' href='{{url('project/removeUserProjects')}}/{{$userProject->id}}/{{$project->id}}' data-activates='project-assign'><i class="material-icons left">cancel</i>{{$userProject->name}}</a>
                    @endforeach
                  </div>
                  </div>
                  </div>
                  </div>



                    <!-- Assign Users To Project -->


        {{-- <!-- assign projects to users -->

            <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3>{{$project->project_title}} assignee</h3>
            </div>
            <div class="box-body">
                <form action="{{url('project/addUserProjects')}}" method = "post">
                    {!! csrf_field() !!}
                    <input type="hidden" name = "project_id" value = "{{$project->id}}">
                    <div class="form-group">
                        <select name="user_id" id="" class = "form-control">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class = 'btn btn-primary'>Assign</button>
                    </div>
                </form>
                <table class = 'table'>
                    <thead>
                        <th>Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($userProjects as $userProject)
                        <tr>
                            <td>{{$userProject->name}}</td>
                            <td><a href="{{url('project/removeUserProjects')}}/{{$userProject->id}}/{{$project->id}}" class = "delete btn-floating modal-trigger red"><i class="material-icons" aria-hidden="true">delete</i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</select> --}}

</div>
@endsection
