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
    {{-- <form method = 'get' action = '{!!url("project")!!}'>
        <button class = 'btn blue'>project Index</button>
    </form>
    <br> --}}
    <form method = 'POST' action = '{!!url("project")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Create Project</span>
                      <div class="input-field col s12">
                          <input id="project_title" name = "project_title" type="text" value="{{ old('project_title') }}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="project_title">Project Title</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="project_discerption" name = "project_discerption" type="text" value="{{ old('project_discerption') }}" class="validate materialize-textarea" required></textarea>
                          <label for="project_discerption">Project Description</label>
                      </div>
                      <div class="input-field col s12">
                          <select name = 'goal_id'>
                              @foreach($goals as $key => $value)
                              <option value="{{$key}}">{{$value}}</option>
                              @endforeach
                          </select>
                          <label>Select a Goal</label>
                      </div>
                      <button class = 'btn red' type ='submit'>Create</button>
                    </div>
                  </div>
                </div>
              </div>

    </form>
</div>
@endsection
