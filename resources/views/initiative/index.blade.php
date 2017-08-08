@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        initiative Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("initiative")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New initiative</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/project">Project</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>initiative_title</th>
            <th>initiative_description</th>
            <th>kpi_previous</th>
            <th>kpi_current</th>
            <th>kpi_target</th>
            <th>status</th>
            <th>Why If Not</th>
            <th>DOD Comment</th>
            <th>project_title</th>
            <th>project_discerption</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($initiatives as $initiative) 
            <tr>
                <td>{!!$initiative->initiative_title!!}</td>
                <td>{!!$initiative->initiative_description!!}</td>
                <td>{!!$initiative->kpi_previous!!}</td>
                <td>{!!$initiative->kpi_current!!}</td>
                <td>{!!$initiative->kpi_target!!}</td>
                <td>{!!$initiative->status!!}</td>
                <td>{!!$initiative->why_if_not!!}</td>
                <td>{!!$initiative->dod_note!!}</td>
                <td>{!!$initiative->project->project_title!!}</td>
                <td>{!!$initiative->project->project_discerption!!}</td>
                <td>{!!$initiative->project->created_at!!}</td>
                <td>{!!$initiative->project->updated_at!!}</td>
                <td>{!!$initiative->project->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/initiative/{!!$initiative->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/initiative/{!!$initiative->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/initiative/{!!$initiative->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $initiatives->render() !!}

</div>
@endsection