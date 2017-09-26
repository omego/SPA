@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit goal
    </h1>
    <form method = 'get' action = '{!!url("goal")!!}'>
        <button class = 'btn blue'>goal Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("goal")!!}/{!!$goal->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="goal_title" name = "goal_title" type="text" class="validate" value="{!!$goal->
            goal_title!!}">
            <label for="goal_title">goal_title</label>
        </div>
        <div class="input-field col s6">
            <input id="goal_discerption" name = "goal_discerption" type="text" class="validate" value="{!!$goal->
            goal_discerption!!}">
            <label for="goal_discerption">goal_discerption</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>

            <!-- assign goals to users -->

                <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3>{{$goal->goal_title}} assignee</h3>
                </div>
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
                        <div class="form-group">
                            <button class = 'btn btn-primary'>Add permission</button>
                        </div>
                    </form>
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
        </div>

</div>
@endsection
