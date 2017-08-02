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
</div>
@endsection