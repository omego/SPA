@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit action_plan_attachment
    </h1>
    <form method = 'get' action = '{!!url("action_plan_attachment")!!}'>
        <button class = 'btn blue'>action_plan_attachment Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("action_plan_attachment")!!}/{!!$action_plan_attachment->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="file_name" name = "file_name" type="text" class="validate" value="{!!$action_plan_attachment->
            file_name!!}"> 
            <label for="file_name">file_name</label>
        </div>
        <div class="input-field col s12">
            <select name = 'action_plan_id'>
                @foreach($action_plans as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>action_plans Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection