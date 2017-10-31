@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    @if ($errors->any())
    <div class="card deep-orange darken-4 white-text center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <br> --}}
    <form enctype="multipart/form-data" method = 'POST' action = '{!!url("action_plan")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Create Action Plan</span>
                      <div class="input-field col s12">
                          <input id="action_plan_title" name = "action_plan_title" type="text" value="{{ old('action_plan_title') }}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="action_plan_title">Action Plan Title</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_start" name = "action_plan_start" type="text" value="{{ old('action_plan_start') }}" class="datepicker" required>
                          <label for="action_plan_start">Action Plan Start</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_end" name = "action_plan_end" type="text" value="{{ old('action_plan_end') }}" class="datepicker" required>
                          <label for="action_plan_end">Action Plan End</label>
                      </div>
                      <div class="input-field col s12">
                          <select name = 'initiative_id'>
                              @foreach($initiatives as $key => $value)
                              <option value="{{$key}}">{{$value}}</option>
                              @endforeach
                          </select>
                          <label>Select an Initiative</label>
                      </div>
                      <button class = 'btn' type ='submit'>Create</button>
                    </div>
                  </div>
                </div>
              </div>
    </form>
</div>
@endsection
