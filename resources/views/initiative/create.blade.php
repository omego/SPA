@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create initiative
    </h1>
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("initiative")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="initiative_title" name = "initiative_title" type="text" class="validate">
            <label for="initiative_title">initiative_title</label>
        </div>
        <div class="input-field col s6">
            <input id="initiative_description" name = "initiative_description" type="text" class="validate">
            <label for="initiative_description">initiative_description</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_previous" name = "kpi_previous" type="text" class="validate">
            <label for="kpi_previous">kpi_previous</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_current" name = "kpi_current" type="text" class="validate">
            <label for="kpi_current">kpi_current</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_target" name = "kpi_target" type="text" class="validate">
            <label for="kpi_target">kpi_target</label>
        </div>
        <div class="input-field col s12">
            <select name = 'project_id'>
                @foreach($projects as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>projects Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection