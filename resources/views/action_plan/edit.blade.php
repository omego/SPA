@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit action_plan
    </h1>
    <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("action_plan")!!}/{!!$action_plan->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="action_plan_title" name = "action_plan_title" type="text" class="validate" value="{!!$action_plan->
            action_plan_title!!}"> 
            <label for="action_plan_title">action_plan_title</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_updates" name = "action_plan_updates" type="text" class="validate" value="{!!$action_plan->
            action_plan_updates!!}"> 
            <label for="action_plan_updates">action_plan_updates</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_risks" name = "action_plan_risks" type="text" class="validate" value="{!!$action_plan->
            action_plan_risks!!}"> 
            <label for="action_plan_risks">action_plan_risks</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_resources" name = "action_plan_resources" type="text" class="validate" value="{!!$action_plan->
            action_plan_resources!!}"> 
            <label for="action_plan_resources">action_plan_resources</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_start" name = "action_plan_start" type="text" class="validate" value="{!!$action_plan->
            action_plan_start!!}"> 
            <label for="action_plan_start">action_plan_start</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_end" name = "action_plan_end" type="text" class="validate" value="{!!$action_plan->
            action_plan_end!!}"> 
            <label for="action_plan_end">action_plan_end</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_approval" name = "action_plan_approval" type="text" class="validate" value="{!!$action_plan->
            action_plan_approval!!}"> 
            <label for="action_plan_approval">action_plan_approval</label>
        </div>
        <div class="input-field col s12">
            <select name = 'initiative_id'>
                @foreach($initiatives as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>initiatives Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection