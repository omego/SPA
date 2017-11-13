@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show Goal')
@section('content')

<div class = 'container'>
  <div class="row">
     <div class="col s12">
       <div class="card">
         <div class="card-content">
    @php
           $InitiativeCount = DB::table('goals')
       ->join('projects', 'goals.id', '=', 'projects.goal_id')
       ->join('initiatives', 'projects.id', '=', 'initiatives.project_id')
       ->select('initiatives.*', 'initiatives.initiative_title')
       ->where('goals.id', '=', $GoalID)
       ->get();


     $InitiativeCounted = $InitiativeCount->where('status', '=', 'Accomplished')->count();
     $InitiativeNotCounted = $InitiativeCount->where('status', '=', 'Not Accomplished')->count();
     $InitiativeCountedAll = ($InitiativeCounted + $InitiativeNotCounted);
     $InitiativePercent = $InitiativeCountedAll == 0 ? 0 : (($InitiativeCounted / $InitiativeCountedAll) * 100);
   @endphp
           <div class="row">
           <span class= "new badge grey" data-badge-caption="">Created: {{ $Goal_created_at }}</span>
           <span class= "new badge" data-badge-caption="">Updated: {{ $Goal_updated_at }}</span>
           <span class="left new badge     @if ($InitiativePercent <= 20) red darken-2
               @elseif ($InitiativePercent <= 50) yellow darken-2
               @elseif ($InitiativePercent <= 80) orange
               @elseif ($InitiativePercent <= 100) green
                 @endif" data-badge-caption="">{!!round($InitiativePercent)!!}%</span>
         </div>
           <span class="card-title"><h5>Strategic Goal {{ $GoalTitle }}</h5></span>
           <p>{{ $Goal_Discerption }}</p>
         </div>
         <div class="card-action">
           @can('delete goals')
             <a href = '#modal1' class = 'delete modal-trigger ' data-link = "/goal/{!!$GoalID!!}/deleteMsg">delete</a>
           @endcan
           @can('edit goals')
             <a href = '#' class = 'viewEdit' data-link = '/goal/{!!$GoalID!!}/edit'>edit</a>
           @endcan
          @foreach($userGoals as $userGoal)
          <span class= "new badge grey" data-badge-caption="">
            {{$userGoal->name}}
          </span>
          @endforeach
          <span class= "new badge" data-badge-caption="">
          Assigned to:
        </span>
         </div>
       </div>
     </div>
   </div>

    <div class="row">
      <div class="col s12">
      <h5 class="grey-text text-darken-2">Projects under Goal: {{ $GoalTitle }}</h5>
      @can('create projects')
        <a href = '{!!url("project")!!}/create' class = 'orange-text text-accent-2 light'>+ NEW PROJECT</a>
      @endcan
    </div>
    </div>
  <div class="collection">
            @foreach($projects as $project)
              <a href="#" class="viewShow collection-item" data-link = '/project/{!!$project->id!!}'><span class= "new badge" data-badge-caption="">{{ $project->updated_at->diffForHumans() }}</span>
                Project {{ $project->project_title }}
              </a>

            @endforeach
      </div>
    {!! $projects->render() !!}
{{-- Fixed Add + Button Start --}}
    {{-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
           <a class="btn-floating btn-large red">
               <i class="large input material-icons">add</i>
           </a>
           <ul>
               <li><a href = "http://localhost:8888/spa/public/scaffold-dashboard" class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Dashboard"><i class="material-icons">view_list</i></a></li>
               <li><a href = "http://localhost:8888/spa/public/scaffold/rollback" class="btn-floating pink tooltipped" data-position="left" data-delay="50" data-tooltip="RollBack the Schema"><i class="material-icons">repeat</i></a></li>
               <li><a href = "http://localhost:8888/spa/public/scaffold/migrate" class="btn-floating orange tooltipped" data-position="left" data-delay="50" data-tooltip="Migrate the Schema"><i class="material-icons">input</i></a></li>
               <li><a href = "http://localhost:8888/spa/public/scaffold/migrate" class="btn-floating orange tooltipped" data-position="left" data-delay="50" data-tooltip="Migrate the Schema"><i class="material-icons">input</i></a></li>
           </ul>
       </div> --}}
       {{-- Fixed Add + Button End --}}
</div>
@endsection
