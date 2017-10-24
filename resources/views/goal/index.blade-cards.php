@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>

      <div class="row">
        <div class="col s12 m6 l2"><p><h1>Goals</h1></p></div>
    <div class="col s12 m6 l2"><p><form method = 'get' action = '{!!url("goal")!!}/create'>
            <button class = 'btn-floating btn-small waves-effect waves-light red' type = 'submit'><i class="material-icons">add</i></button>
        </form></p></div>
    <div class="col s12 m6 l2"><p></p></div>
    <div class="col s12 m6 l2"><p></p></div>


  </div></div> <div class="container">
<div class="row">
            @foreach($goals as $goal)





        <div class="col s4">
          <div class="card">
            <div class="card-content black-text">
              <span class="card-title black-text">{{ $goal->goal_title }}</span>
              <p>{{ $goal->goal_discerption }}</p>
            </div>
            <div class="card-action">
              <a href = '#' class = 'viewShow' data-link = '/goal/{!!$goal->id!!}'>Show</a>
              <a href = '#' class = 'viewEdit' data-link = '/goal/{!!$goal->id!!}/edit'>Edit</a>
              <a href = '#modal1' class = 'delete' data-link = "/goal/{!!$goal->id!!}/deleteMsg" >Delete</a>
            </div>
          </div>
          </div>



          @endforeach

          </div></div>


    {!! $goals->render() !!}


@endsection
