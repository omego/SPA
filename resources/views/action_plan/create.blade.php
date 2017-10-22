@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create action_plan
    </h1>
    @if ($errors->any())
    <div class="card red white-text center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!!url("action_plan")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="action_plan_title" name = "action_plan_title" type="text" class="validate" required>
            <label for="action_plan_title">action_plan_title</label>
        </div>

        <div class="input-field col s6">
            <input id="action_plan_start" name = "action_plan_start" type="text" class="datepicker" required>
            <label for="action_plan_start">action_plan_start</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_end" name = "action_plan_end" type="text" class="datepicker" required>
            <label for="action_plan_end">action_plan_end</label>
        </div>

        <div class="input-field col s12">
            <select name = 'initiative_id'>
                @foreach($initiatives as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
            <label>initiatives Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection
