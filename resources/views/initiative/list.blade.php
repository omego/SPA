@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show Project')
@section('content')

<div class = 'container'>
  <div class="row">
     <div class="col s12">
       <div class="card">
         <div class="card-content">
           <div class="row">
           <span class= "new badge grey" data-badge-caption="">Created: {!!$ProjectName->created_at->diffForHumans()!!}</span>
           <span class= "new badge" data-badge-caption="">
             Updated: {!!$ProjectName->updated_at->diffForHumans()!!}
           </span>
         </div>
           <span class="card-title"><h4>{!!$ProjectTitle!!}</h4></span>
           <p>{!!$ProjectName->project_discerption!!}</p>
         </div>
         <div class="card-action">
           @can('delete projects')
             <a href = '#modal1' class = 'delete modal-trigger ' data-link = "/project/{!!$ProjectName->id!!}/deleteMsg">delete</a>
           @endcan
           @can('edit projects')
             <a href = '#' class = 'viewEdit' data-link = '/project/{!!$ProjectName->id!!}/edit'>edit</a>
           @endcan
           @foreach($userProjects as $userProject)
          <span class= "new badge grey" data-badge-caption="">
            {{$userProject->name}}
          </span>
          @endforeach
          <span class= "new badge" data-badge-caption="">
          Assigned to:
        </span>
         </div>
       </div>
     </div>
   </div>


    <h4 class="center">
        Initiatives under {!!$ProjectTitle!!}
    </h4>
    <div class="row">
      @can('create initiatives')
        <form class = 'col s4' method = 'get' action = '{!!url("initiative")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New Initiative</button>
        </form>
      @endcan
        {{-- <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/project">Project</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a> --}}
    </div>
        <div class="collection">
            @foreach($initiatives as $initiative)
              <a href="#" class="viewShow collection-item" data-link = '/initiative/{!!$initiative->id!!}'>
                {{-- <span class= "new badge" data-badge-caption="">{!!$initiative->updated_at->diffForHumans()!!}</span> --}}
                <span class="new badge @if ($initiative->status == 'Accomplished') green
                @elseif ($initiative->status == 'Not Accomplished') grey darken-1 @endif" data-badge-caption="">
                  {!!$initiative->status!!}</span>
                {!!$initiative->initiative_title!!}
              </a>
            @endforeach
      </div>
    {!! $initiatives->render() !!}

</div>
@endsection
