@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
  <div class="row">

    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class= "new badge grey" data-badge-caption="">Created: {!!$action_plan->created_at->diffForHumans()!!}</span>
          <span class= "new badge orange accent-2 left" data-badge-caption="">{!!$action_plan->action_plan_approval!!}</span>
          <span class="card-title"><h2>{!!$action_plan->action_plan_title!!}</h2></span>
          <p>{!!$action_plan->action_plan_updates!!}</p>
          </div>
        <div class="card-action">
          @can('delete action plans')
            <a href = '#modal1' class = 'delete modal-trigger ' data-link = "/action_plan/{!!$action_plan->id!!}/deleteMsg">delete</a>
          @endcan
          @can('edit action plans')
            <a href = '#' class = 'viewEdit' data-link = '/action_plan/{!!$action_plan->id!!}/edit'>edit</a>
          @endcan
         <span class= "new badge" data-badge-caption="">Updated: {!!$action_plan->updated_at->diffForHumans()!!}</span>
         </div>
      </div>
    </div>


    <div class="col s6">
      <ul class="collection center">
      <li class="collection-item active">Start Date</li>
      <li class="collection-item">{!!$action_plan->action_plan_start!!}</li>
    </ul>
    </div>
    <div class="col s6">
      <ul class="collection center">
      <li class="collection-item active">End Date</li>
      <li class="collection-item">{!!$action_plan->action_plan_end!!}</li>
    </ul>
    </div>
    {{-- <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form> --}}

        <div class="col s6">
          <ul class="collection">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Risks</li>
          <li class="collection-item">{!!$action_plan->action_plan_risks!!}</li>
        </ul>
        </div>
        <div class="col s6">
          <ul class="collection">
          <li class="collection-item grey-text text-darken-3 active grey lighten-3">Resources</li>
          <li class="collection-item">{!!$action_plan->action_plan_resources!!}</li>
        </ul>
        </div>
        </div>
        </div>
        @endsection
