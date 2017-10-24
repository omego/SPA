@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h4>
        Action Plans
    </h4>
    <div class="row">
      @can('create action plans')
        <form class = 'col s3' method = 'get' action = '{!!url("action_plan")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New Action Plan</button>
        </form>
      @endcan
        {{-- <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/initiative">Initiative</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a> --}}
    </div>

          <div class="collection">
            @foreach($action_plans as $action_plan)
              <a href="#" class="viewShow collection-item" data-link = '/action_plan/{!!$action_plan->id!!}'>
                <span class="new badge @if ($action_plan->action_plan_approval == 'Approved') green
                @elseif ($action_plan->action_plan_approval == 'Pending') orange
                @elseif ($action_plan->action_plan_approval == 'Draft') grey darken-1 @endif" data-badge-caption="">
                  {{ $action_plan->action_plan_approval }}</span>
                {{ $action_plan->action_plan_title }}
              </a>
            @endforeach
          </div>
    {!! $action_plans->render() !!}

</div>
@endsection
