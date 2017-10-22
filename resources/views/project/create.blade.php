@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create project
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
    <form method = 'get' action = '{!!url("project")!!}'>
        <button class = 'btn blue'>project Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("project")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="project_title" name = "project_title" type="text" class="validate" required>
            <label for="project_title">project_title</label>
        </div>
        <div class="input-field col s6">
            <input id="project_discerption" name = "project_discerption" type="text" class="validate" required>
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
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection
