@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
  <div class="row">
    <div class="col s12">
    <h1>
        {!!$action_plan->action_plan_title!!}
    </h1>
    <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
  </div>
    <div class="col s12">
      <ul class="collection">
        <div class="col s6">
          <li class="collection-item active">Updates</li>
          <li class="collection-item">{!!$action_plan->action_plan_updates!!}</li>
        </div>
        <div class="col s6">
          <li class="collection-item active">Risks</li>
          <li class="collection-item">{!!$action_plan->action_plan_risks!!}</li>
        </div>
        <div class="col s12">
          <li class="collection-item active">Resources</li>
          <li class="collection-item">{!!$action_plan->action_plan_resources!!}</li>
        </div>
          <div class="col s6">
            <li class="collection-item active">Start Date</li>
            <li class="collection-item">{!!$action_plan->action_plan_start!!}</li>
          </div>
          <div class="col s6">
            <li class="collection-item active">End Date</li>
            <li class="collection-item">{!!$action_plan->action_plan_end!!}</li>
          </div>
          <div class="col s12">
          <li class="collection-item active">Approval</li>
          <li class="collection-item">{!!$action_plan->action_plan_approval!!}</li>
        </div>
        </ul>
            </div>
          </div>
        </div>
        @endsection
