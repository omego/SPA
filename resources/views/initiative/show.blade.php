@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show Initiative')
@section('content')



<div class = 'container'>
  <div class="row">
     <div class="col s12">
       <div class="card">
         <div class="card-content">
           <div class="row">
           <span class= "new badge grey" data-badge-caption="">Created: {{ $initiative->created_at->diffForHumans() }}</span>
           <span class= "new badge" data-badge-caption="">Updated: {{ $initiative->updated_at->diffForHumans() }}</span>
           <span class="left new badge @if ($initiative->status == 'Accomplished') green
                                   @elseif ($initiative->status == 'Not Accomplished') grey darken-1 @endif" data-badge-caption="">
             {{ $initiative->status }}</span>
           </div>
           <span class="card-title"><h5>{{ $initiative->initiative_title }}</h5></span>
           <p>{{ $initiative->initiative_description }}</p>
         </div>
         <div class="card-action">
           @can('delete initiatives')
               <a href = '#modal1' class = 'delete modal-trigger ' data-link = "/initiative/{!!$initiative->id!!}/deleteMsg">delete</a>
           @endcan
           @can('edit initiatives')
             <a href = '#' class = 'viewEdit' data-link = '/initiative/{!!$initiative->id!!}/edit'>edit</a>
           @endcan

            @isset($AssignedUser->name)
              <span class= "new badge grey" data-badge-caption="">
              {{ $AssignedUser->name }}
            </span>
            <span class= "new badge" data-badge-caption="">Assigned to:
            </span>
            @endisset
         </div>
       </div>
     </div>

      {{-- <div class="col s12"><h1>

    </h1>
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    </div> --}}

    <div class="col s12">
        <ul class="collection">
      <li class="collection-item grey-text text-darken-3 active grey lighten-2">KPI Description</li>
              <li class="collection-item">{{ $initiative->kpi_description }}</li>
            </ul>
    </div>

          <div class="col s4">
            <ul class="collection">
            <li class="collection-item active center">KPI Previous<br>{{ $initiative->kpi_previous_date }}</li>
            <li class="collection-item center">{{ $initiative->kpi_previous }}</li>
        </ul>
        </div>
        <div class="col s4">
        <ul class="collection">
            <li class="collection-item active center">KPI Current<br>{{ $initiative->kpi_current_date }}</li>
            <li class="collection-item center">{{ $initiative->kpi_current }}</li>
        </ul>
        </div>
        <div class="col s4">
        <ul class="collection">
            <li class="collection-item active center">KPI Target<br>{{ $initiative->kpi_target_date }}</li>
            <li class="collection-item center">{{ $initiative->kpi_target }}</li>
          </ul>
          </div>

      <div class="col s6">
          <ul class="collection">
        <li class="collection-item grey-text text-darken-3 active grey lighten-2">Why? (If Not Accomplished)</li>
                <li class="collection-item">{{ $initiative->why_if_not }}</li>
              </ul>
      </div>
      <div class="col s6">
          <ul class="collection">
            <li class="collection-item grey-text text-darken-3 active grey lighten-1">DOD Comment</li>
                    <li class="collection-item">{{ $initiative->dod_note }}</li>
          </ul>
      </div>
      <div class="col s12">
        <h5 class="grey-text text-darken-2"> Action Plans under Initiative: {{ $initiative->initiative_title }} </h5>
        @can('create action plans')
          <a href = '{!!url("action_plan")!!}/create' class = 'orange-text text-accent-2 light'>+ NEW ACTION PLAN</a>
        @endcan
      </div>
      <div class="row">
      <div class="col s12">
        <div class="collection">
            @foreach($action_plans as $action_plan)

            <a href="#" class="viewShow collection-item" data-link = '/action_plan/{!!$action_plan->id!!}'>
              <span class="new badge @if ($action_plan->action_plan_approval == 'Approved') green
              @elseif ($action_plan->action_plan_approval == 'Pending') orange
              @elseif ($action_plan->action_plan_approval == 'Draft') grey darken-1 @endif" data-badge-caption="">
                {{ $action_plan->action_plan_approval }}</span>
              {{-- <span class= "new badge" data-badge-caption="">{!!$action_plan->created_at->diffForHumans()!!}</span> --}}
                {{ $action_plan->action_plan_title }}
              </a>

            @endforeach
      </div>
    </div>
      </div>
    </div>
    </div>
    {!! $action_plans->render() !!}
      </div>

            @endsection
