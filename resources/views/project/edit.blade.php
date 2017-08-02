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
        <div class="input-field col s12">
            <select name = 'goal_id'>
                @foreach($goals as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>goals Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection