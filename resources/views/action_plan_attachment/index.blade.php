@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        action_plan_attachment Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("action_plan_attachment")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New action_plan_attachment</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/action_plan">Action_plan</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>file_name</th>
            <th>action_plan_title</th>
            <th>action_plan_updates</th>
            <th>action_plan_risks</th>
            <th>action_plan_resources</th>
            <th>action_plan_start</th>
            <th>action_plan_end</th>
            <th>action_plan_approval</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($action_plan_attachments as $action_plan_attachment)
            <tr>
                <td>{{ $action_plan_attachment->file_name }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_title }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_updates }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_risks }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_resources }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_start }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_end }}</td>
                <td>{{ $action_plan_attachment->action_plan->action_plan_approval }}</td>
                <td>{{ $action_plan_attachment->action_plan->created_at }}</td>
                <td>{{ $action_plan_attachment->action_plan->updated_at }}</td>
                <td>{{ $action_plan_attachment->action_plan->deleted_at }}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/action_plan_attachment/{!!$action_plan_attachment->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/action_plan_attachment/{!!$action_plan_attachment->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/action_plan_attachment/{!!$action_plan_attachment->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $action_plan_attachments->render() !!}

</div>
@endsection
