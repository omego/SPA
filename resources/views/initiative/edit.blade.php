@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit initiative
    </h1>
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("initiative")!!}/{!!$initiative->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="initiative_title" name = "initiative_title" type="text" class="validate" value="{!!$initiative->
            initiative_title!!}"> 
            <label for="initiative_title">initiative_title</label>
        </div>
        <div class="input-field col s6">
            <input id="initiative_description" name = "initiative_description" type="text" class="validate" value="{!!$initiative->
            initiative_description!!}"> 
            <label for="initiative_description">initiative_description</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_previous" name = "kpi_previous" type="text" class="validate" value="{!!$initiative->
            kpi_previous!!}"> 
            <label for="kpi_previous">kpi_previous</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_current" name = "kpi_current" type="text" class="validate" value="{!!$initiative->
            kpi_current!!}"> 
            <label for="kpi_current">kpi_current</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_target" name = "kpi_target" type="text" class="validate" value="{!!$initiative->
            kpi_target!!}"> 
            <label for="kpi_target">kpi_target</label>
        </div>
<!--         <div class="input-field col s6">
            <input id="status" name = "status" type="checkbox" value="Complete" class="checkbox" {{ $initiative->status == 'Complete' ? 'checked' : '' }}> 
            <label for="status">Complete</label>
        </div> -->

         <div class="input-field col s6">
     <input name="status" type="radio" class="with-gap" id="status2" checked="checked" value="Not Accomplished" {{ $initiative->status == 'Not Accomplished' ? 'checked' : '' }} />
      <label for="status2">Not Accomplished</label>

      <input name="status" type="radio" class="with-gap" id="status1" value="Accomplished" {{ $initiative->status == 'Accomplished' ? 'checked' : '' }} />
      <label for="status1">Accomplished</label>
  </div>
          <div class="input-field col s6">
            <input id="why_if_not" name = "why_if_not" type="text" class="validate" value="{!!$initiative->
            why_if_not!!}"> 
            <label for="why_if_not">Why if not</label>
            </div>
            <div class="input-field col s6">
            <input id="dod_note" name = "dod_note" type="text" class="validate" value="{!!$initiative->
            dod_note!!}"> 
            <label for="dod_note">DOD Note</label>
        </div>
        <div class="input-field col s12">
            <select name = 'project_id'>
                @foreach($projects as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>projects Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection