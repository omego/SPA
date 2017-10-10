@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h4>
        Projects
    </h4>
    <div class="row">
      @can('create projects')
        <form class = 'col s3' method = 'get' action = '{!!url("project")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New project</button>
        </form>
      @endcan
        {{-- <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/goal">Goal</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a> --}}
    </div>
      <div class="collection">
            @foreach($projects as $project)
              <a href="#" class="viewShow collection-item" data-link = '/project/{!!$project->id!!}'><span class= "new badge" data-badge-caption="">{!!$project->updated_at->diffForHumans()!!}</span>
                {!!$project->project_title!!}
              </a>
            @endforeach
          </div>

    {!! $projects->render() !!}

</div>
@endsection
