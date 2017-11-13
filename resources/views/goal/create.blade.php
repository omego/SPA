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

    {{-- <form method = 'get' action = '{!!url("goal")!!}'>
        <button class = 'btn blue'>goal Index</button>
    </form>
    <br> --}}
    <form method = 'POST' action = '{!!url("goal")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Create Goal</span>
                      <div class="input-field col s12">
                          <input id="goal_title" name = "goal_title" type="text" value="{{ old('goal_title') }}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="goal_title">Goal Number</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="goal_discerption" name = "goal_discerption" type="text" class="validate materialize-textarea" required>{{ old('goal_discerption') }}</textarea>
                          <label for="goal_discerption">Goal Description</label>
                      </div>
                      <button class = 'btn' type ='submit'>Create</button>
                    </div>
                  </div>
                </div>
              </div>


    </form>

</div>
@endsection
