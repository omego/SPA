@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit project
    </h1>
    <form method = 'get' action = '{!!url("project")!!}'>
        <button class = 'btn blue'>project Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("project")!!}/{!!$project->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="project_title" name = "project_title" type="text" class="validate" value="{!!$project->
            project_title!!}">
            <label for="project_title">project_title</label>
        </div>
        <div class="input-field col s6">
            <input id="project_discerption" name = "project_discerption" type="text" class="validate" value="{!!$project->
            project_discerption!!}">
            <label for="project_discerption">project_discerption</label>
        </div>
        <!-- <div class="input-field col s12">
            <select name = 'goal_id'>
                @foreach($goals as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
            <label>goals Select</label>
        </div> -->
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
            <label>goals Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>


            </form>

        <!-- assign projects to users -->

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

</select>


</div>
@endsection
