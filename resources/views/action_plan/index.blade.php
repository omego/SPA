@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        action_plan Index
    </h1>
    <div class="row">
      @can('create action plans')
        <form class = 'col s3' method = 'get' action = '{!!url("action_plan")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New action_plan</button>
        </form>
      @endcan
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost:8888/spa/public/initiative">Initiative</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>action_plan_title</th>
            <th>action_plan_updates</th>
            <th>action_plan_risks</th>
            <th>action_plan_resources</th>
            <th>action_plan_start</th>
            <th>action_plan_end</th>
            <th>action_plan_approval</th>
            <th>initiative_title</th>
            <th>initiative_description</th>
            <th>kpi_previous</th>
            <th>kpi_current</th>
            <th>kpi_target</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($action_plans as $action_plan)
            <tr>
                <td>{!!$action_plan->action_plan_title!!}</td>
                <td>{!!$action_plan->action_plan_updates!!}</td>
                <td>{!!$action_plan->action_plan_risks!!}</td>
                <td>{!!$action_plan->action_plan_resources!!}</td>
                <td>{!!$action_plan->action_plan_start!!}</td>
                <td>{!!$action_plan->action_plan_end!!}</td>
                <td>{!!$action_plan->action_plan_approval!!}</td>
                <td>{!!$action_plan->initiative->initiative_title!!}</td>
                <td>{!!$action_plan->initiative->initiative_description!!}</td>
                <td>{!!$action_plan->initiative->kpi_previous!!}</td>
                <td>{!!$action_plan->initiative->kpi_current!!}</td>
                <td>{!!$action_plan->initiative->kpi_target!!}</td>
                <td>{!!$action_plan->initiative->created_at!!}</td>
                <td>{!!$action_plan->initiative->updated_at!!}</td>
                <td>{!!$action_plan->initiative->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                      @can('delete action plans')
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/action_plan/{!!$action_plan->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                      @endcan
                      @can('edit action plans')
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/action_plan/{!!$action_plan->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                      @endcan
                      @can('view action plans')
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/action_plan/{!!$action_plan->id!!}'><i class = 'material-icons'>info</i></a>
                      @endcan
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $action_plans->render() !!}

</div>
@endsection
