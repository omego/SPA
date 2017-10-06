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

            <a href="#" class="viewShow collection-item" data-link = '/goal/{!!$goal->id!!}'><span class= "new badge" data-badge-caption="">{!!$goal->updated_at->diffForHumans()!!}</span>
 <span class="new badge blue" data-badge-caption="Accomplished">
              @php
      $InitiativeCount = DB::table('goals')
  ->join('projects', 'goals.id', '=', 'projects.goal_id')
  ->join('initiatives', 'projects.id', '=', 'initiatives.project_id')
  ->select('initiatives.*', 'initiatives.initiative_title')
  ->where('goals.id', '=', $goal->id)
  ->get();



$InitiativeCounted = $InitiativeCount->where('status', '=', 'Accomplished')->count();
echo $InitiativeCounted;
@endphp
</span>
            {!!$goal->goal_title!!}</a>



                <!-- {!!$goal->goal_discerption!!} -->

            @endforeach
    </div>
    {!! $goals->render() !!}

</div>
@endsection
