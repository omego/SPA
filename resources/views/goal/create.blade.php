@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create goal
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

    <form method = 'get' action = '{!!url("goal")!!}'>
        <button class = 'btn blue'>goal Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("goal")!!}'>
      {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="goal_title" name = "goal_title" type="text" class="validate" required>
            <label for="goal_title">goal_title</label>
        </div>
        <div class="input-field col s6">
            <input id="goal_discerption" name = "goal_discerption" type="text" class="validate" required>
            <label for="goal_discerption">goal_discerption</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
        
    </form>
</div>
@endsection
