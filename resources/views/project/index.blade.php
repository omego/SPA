@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        project Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("project")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New project</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/goal">Goal</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>Project Title</th>
            <th>Project Description</th>
            <th>Goal Title</th>
            <th>Goal ID</th>

            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{!!$project->project_title!!}</td>
                <td>{!!$project->project_discerption!!}</td>
                <td>{!!$project->goal->goal_title!!}</td>
                <td>{!!$project->goal_id!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/project/{!!$project->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/project/{!!$project->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/project/{!!$project->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $projects->render() !!}

</div>
@endsection
