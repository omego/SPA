@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create Initiative')
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
    {{-- <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    <br> --}}
    <form method = 'POST' action = '{!!url("initiative")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Create Initiative</span>
                      <div class="input-field col s12">
                          <input id="initiative_title" name = "initiative_title" type="text" value="{{ old('initiative_title') }}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="initiative_title">Initiative Number</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="initiative_description" name = "initiative_description" type="text" class="validate materialize-textarea" required>{{ old('initiative_description') }}</textarea>
                          <label for="initiative_description">Initiative Description</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="kpi_description" name = "kpi_description" type="text" class="validate materialize-textarea">{{ old('kpi_description') }}</textarea>
                          <label for="kpi_description">KPI Description</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_previous" name = "kpi_previous" type="text" value="{{ old('kpi_previous') }}" class="validate" data-length="11" required>
                          <label for="kpi_previous">KPI Previous</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_current" name = "kpi_current" type="text" value="{{ old('kpi_current') }}" class="validate" data-length="11" required>
                          <label for="kpi_current">KPI Current</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_target" name = "kpi_target" type="text" value="{{ old('kpi_target') }}" class="validate" data-length="11" required>
                          <label for="kpi_target">KPI Target</label>
                      </div>

                      <div class="input-field col s4">
                          <input id="kpi_previous_date" name = "kpi_previous_date" type="text" value="{{ old('kpi_previous_date') }}" class="datepicker">
                          <label for="kpi_previous_date">KPI Previous (Date)</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_current_date" name = "kpi_current_date" type="text" value="{{ old('kpi_current_date') }}" class="datepicker">
                          <label for="kpi_current_date">KPI Current (Date)</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_target_date" name = "kpi_target_date" type="text" value="{{ old('kpi_target_date') }}" class="datepicker">
                          <label for="kpi_target_date">KPI Target (Date)</label>
                      </div>

                      <div class="input-field col s12">
                          <select name = 'project_id'>
                              @foreach($projects as $key => $value)
                              <option value="{{$key}}">{{$value}}</option>
                              @endforeach
                          </select>
                          <label>Select a Project</label>

                      </div>
                      <button class = 'btn' type ='submit'>Create</button>
                    </div>
                  </div>
                </div>
              </div>

    </form>
</div>
@endsection
