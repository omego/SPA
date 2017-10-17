@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h4>
        Goals
    </h4>
    <div class="row">
        @can('create goals')
        <form class = 'col s3' method = 'get' action = '{!!url("goal")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New Goal</button>
        </form>
      @endcan
    </div>
    <div class="collection">
            @foreach($goals as $goal)

              @php
      $InitiativeCount = DB::table('goals')
  ->join('projects', 'goals.id', '=', 'projects.goal_id')
  ->join('initiatives', 'projects.id', '=', 'initiatives.project_id')
  ->select('initiatives.*', 'initiatives.initiative_title')
  ->where('goals.id', '=', $goal->id)
  ->get();



$InitiativeCounted = $InitiativeCount->where('status', '=', 'Accomplished')->count();
$InitiativeNotCounted = $InitiativeCount->where('status', '=', 'Not Accomplished')->count();
$InitiativeCountedAll = ($InitiativeCounted + $InitiativeNotCounted);
$InitiativePercent = $InitiativeCountedAll == 0 ? 0 : (($InitiativeCounted / $InitiativeCountedAll) * 100);
@endphp

            <a href="#" class="viewShow collection-item" data-link = '/goal/{!!$goal->id!!}'><span class= "new badge
              @if ($InitiativePercent <= 20) red darken-2
              @elseif ($InitiativePercent <= 50) yellow darken-2
              @elseif ($InitiativePercent <= 80) orange
              @elseif ($InitiativePercent <= 100) green
                @endif" data-badge-caption="">{!!round($InitiativePercent)!!}%</span>


            {!!$goal->goal_title!!}
            <div class="progress grey">
                <div class="determinate
                @if ($InitiativePercent <= 20) red darken-2
                @elseif ($InitiativePercent <= 50) yellow darken-2
                @elseif ($InitiativePercent <= 80) orange
                @elseif ($InitiativePercent <= 100) green
                  @endif" style="width: {!!$InitiativePercent!!}%"></div>
            </div>
          </a>

            @endforeach
    </div>
    {!! $goals->render() !!}

</div>
@endsection
