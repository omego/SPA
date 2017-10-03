@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        goal Index
    </h1>
    <div class="row">
        @can('create goals')
        <form class = 'col s3' method = 'get' action = '{!!url("goal")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New goal</button>
        </form>
      @endcan
    </div>
    <div class="collection">
            @foreach($goals as $goal)

            <a href="#" class="viewShow collection-item" data-link = '/goal/{!!$goal->id!!}'><span class= "badge">{!!$goal->created_at->diffForHumans()!!}</span>{!!$goal->goal_title!!}</a>


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
                <!-- {!!$goal->goal_discerption!!} -->

                    <div class = 'row'>
                      @can('delete goals')
                        <a href = '#modal1' class = 'delete modal-trigger ' data-link = "/goal/{!!$goal->id!!}/deleteMsg" >delete</a>
                      @endcan
                      @can('edit goals')
                        <a href = '#' class = 'viewEdit' data-link = '/goal/{!!$goal->id!!}/edit'>edit</a>
                      @endcan
                      @can('view goals')
                        <a href = '#' class = 'viewShow' data-link = '/goal/{!!$goal->id!!}'>info</a>
                      @endcan
                    </div>

            @endforeach
    </div>
    {!! $goals->render() !!}

</div>
@endsection
