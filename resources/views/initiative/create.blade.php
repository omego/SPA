@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>

    @if ($errors->any())
    <div class="card red white-text center">
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
                          <label for="initiative_title">Initiative Title</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="initiative_description" name = "initiative_description" type="text" value="{{ old('initiative_description') }}" class="validate materialize-textarea" required></textarea>
                          <label for="initiative_description">Initiative Description</label>
                      </div>

                      <div class="input-field col s4">
                          <input id="kpi_previous" name = "kpi_previous" type="text" value="{{ old('kpi_previous') }}" class="validate" required>
                          <label for="kpi_previous">kpi_previous</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_current" name = "kpi_current" type="text" value="{{ old('kpi_current') }}" class="validate" required>
                          <label for="kpi_current">kpi_current</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_target" name = "kpi_target" type="text" value="{{ old('kpi_target') }}" class="validate" required>
                          <label for="kpi_target">kpi_target</label>
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
