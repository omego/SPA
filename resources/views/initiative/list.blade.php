@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        Initiatives under {!!$ProjectTitle!!}
    </h1>
    <div class="row">{!!$ProjectName->project_discerption!!}{!!$ProjectName->created_at->diffForHumans()!!}{!!$ProjectName->updated_at->diffForHumans()!!}
      @can('create initiatives')
        <form class = 'col s3' method = 'get' action = '{!!url("initiative")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New initiative</button>
        </form>
      @endcan
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/project">Project</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
        <div class="collection">
            @foreach($initiatives as $initiative)
              <a href="#" class="viewShow collection-item" data-link = '/initiative/{!!$initiative->id!!}'><span class= "new badge" data-badge-caption="">{!!$initiative->created_at->diffForHumans()!!}</span>
                {!!$initiative->initiative_title!!}
              </a>
            @endforeach
      </div>
    {!! $initiatives->render() !!}

</div>
@endsection
