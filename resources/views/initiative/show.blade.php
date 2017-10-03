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
      <div class="collection">
        <ul><div class="col s4">
            <li class="collection-item active center">KPI Previous</li>
            <li class="collection-item center">{!!$initiative->kpi_previous!!}</li>
          </div>
          <div class="col s4">
            <li class="collection-item active center">KPI Current</li>
            <li class="collection-item center">{!!$initiative->kpi_current!!}</li>
          </div>
          <div class="col s4">
            <li class="collection-item active center">KPI Target</li>
            <li class="collection-item center">{!!$initiative->kpi_target!!}</li>
          </div>
          </ul>
          </div>
    </div>
      <div class="col s6">


            <ul class="collection with-header">
              <li class="collection-header"><h5>Initiative Description</h5></li>
                  <li class="collection-item">{!!$initiative->initiative_description!!}</li>
              <li class="collection-header"><h5>Status</h5></li>
                  <li class="collection-item">{!!$initiative->status!!}</li>
              <li class="collection-header"><h5>Why If Not</h5></li>
                      <li class="collection-item">{!!$initiative->why_if_not!!}</li>
              <li class="collection-header"><h5>DOD Comment</h5></li>
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
