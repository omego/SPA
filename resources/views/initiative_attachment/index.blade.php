@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        initiative_attachment Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("initiative_attachment")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New initiative_attachment</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/initiative">Initiative</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>file_name</th>
            <th>initiative_title</th>
            <th>initiative_description</th>
            <th>kpi_previous</th>
            <th>kpi_current</th>
            <th>kpi_target</th>
            <th>status</th>
            <th>why_if_not</th>
            <th>dod_note</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($initiative_attachments as $initiative_attachment)
            <tr>
                <td>{{ $initiative_attachment->file_name }}</td>
                <td>{{ $initiative_attachment->initiative->initiative_title }}</td>
                <td>{{ $initiative_attachment->initiative->initiative_description }}</td>
                <td>{{ $initiative_attachment->initiative->kpi_previous }}</td>
                <td>{{ $initiative_attachment->initiative->kpi_current }}</td>
                <td>{{ $initiative_attachment->initiative->kpi_target }}</td>
                <td>{{ $initiative_attachment->initiative->status }}</td>
                <td>{{ $initiative_attachment->initiative->why_if_not }}</td>
                <td>{{ $initiative_attachment->initiative->dod_note }}</td>
                <td>{{ $initiative_attachment->initiative->created_at }}</td>
                <td>{{ $initiative_attachment->initiative->updated_at }}</td>
                <td>{{ $initiative_attachment->initiative->deleted_at }}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/initiative_attachment/{!!$initiative_attachment->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/initiative_attachment/{!!$initiative_attachment->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/initiative_attachment/{!!$initiative_attachment->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $initiative_attachments->render() !!}

</div>
@endsection
