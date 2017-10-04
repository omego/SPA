@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')



<div class = 'container'>
<div class="row">
      <div class="col s12"><h1>
        {!!$initiative->initiative_title!!}
    </h1>
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    </div>
    <div class="col s12">
          <div class="col s4">
            <ul class="collection">
            <li class="collection-item active center">KPI Previous</li>
            <li class="collection-item center">{!!$initiative->kpi_previous!!}</li>
        </ul>
        </div>
        <div class="col s4">
        <ul class="collection">
            <li class="collection-item active center">KPI Current</li>
            <li class="collection-item center">{!!$initiative->kpi_current!!}</li>
        </ul>
        </div>
        <div class="col s4">
        <ul class="collection">
            <li class="collection-item active center">KPI Target</li>
            <li class="collection-item center">{!!$initiative->kpi_target!!}</li>
          </ul>
          </div>
    </div>
      <div class="col s6">
      <ul class="collection">
              <li class="collection-item grey-text text-darken-3 active grey lighten-2">Initiative Description</li>
                  <li class="collection-item">{!!$initiative->initiative_description!!}</li>
              <li class="collection-item grey-text text-darken-3 active grey lighten-2">Status</li>
                  <li class="collection-item">{!!$initiative->status!!}</li>
              <li class="collection-item grey-text text-darken-3 active grey lighten-2">Why If Not</li>
                      <li class="collection-item">{!!$initiative->why_if_not!!}</li>
              <li class="collection-item grey-text text-darken-3 active grey lighten-1">DOD Comment</li>
                      <li class="collection-item">{!!$initiative->dod_note!!}</li>

      </div>
      <div class="col s6">
        <h4> Action Plans under {!!$initiative->initiative_title!!} </h4>
        <div class="collection">
            @foreach($action_plans as $action_plan)
            <a href="#" class="viewShow collection-item" data-link = '/action_plan/{!!$action_plan->id!!}'><span class= "new badge" data-badge-caption="">{!!$action_plan->created_at->diffForHumans()!!}</span>
                {!!$action_plan->action_plan_title!!}
              </a>

            @endforeach
      </div>
    {!! $action_plans->render() !!}
      </div>
    </div>

                                        </div>
                                        @endsection
