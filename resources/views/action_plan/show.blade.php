@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
  <div class="row">
    <div class="col s12">
    <h1>
        {!!$action_plan->action_plan_title!!}
    </h1>
  </div>
  <div class="col s6">
  </div>
    <div class="col s3">
      <ul class="collection center">
      <li class="collection-item active">Start Date</li>
      <li class="collection-item">{!!$action_plan->action_plan_start!!}</li>
    </ul>
    </div>
    <div class="col s3">
      <ul class="collection center">
      <li class="collection-item active">End Date</li>
      <li class="collection-item">{!!$action_plan->action_plan_end!!}</li>
    </ul>
    </div>
  </ul>
    {{-- <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form> --}}



    <div class="col s12">
      <ul class="collection">
        <div class="col s6">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Updates</li>
          <li class="collection-item">{!!$action_plan->action_plan_updates!!}</li>
        </div>
        <div class="col s6">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Risks</li>
          <li class="collection-item">{!!$action_plan->action_plan_risks!!}</li>
        </div>
        <div class="col s6">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Resources</li>
          <li class="collection-item">{!!$action_plan->action_plan_resources!!}</li>
        </div>
          <div class="col s6">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Approval</li>
          <li class="collection-item">{!!$action_plan->action_plan_approval!!}</li>
        </div>
        </ul>
          </div>
        </div>
        </div>
        @endsection
