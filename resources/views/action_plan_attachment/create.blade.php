@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create action_plan_attachment
    </h1>
    <form method = 'get' action = '{!!url("action_plan_attachment")!!}'>
        <button class = 'btn blue'>action_plan_attachment Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("action_plan_attachment")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
       <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input <input id="file_name" name = "file_name" type="file" class="validate">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>

        <div class="input-field col s12">
            <select name = 'action_plan_id'>
                @foreach($action_plans as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>action_plans Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection