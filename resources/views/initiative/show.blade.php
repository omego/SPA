@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

 

<div class = 'container'>
<div class="row">
      <div class="col s12"> 
                    </div><div class = 'row'><h4>
        Show initiative <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/initiative/{!!$initiative->id!!}/edit'><i class = 'material-icons'>edit</i></a></h4>
    </div>
    
                        
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative list</button>
    </form>
    
    <form class = 'col s3' method = 'get' action = '{!!url("initiative")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New initiative</button>
        </form>
    </div>
      <div class="col s6">
          
          <table class = 'highlight bordered'>
           <thead>
            <th>kpi_previous</th>
            <th>kpi_current</th>
            <th>kpi_target</th>
        </thead>
                <td>{!!$initiative->kpi_previous!!}</td>
        
                <td>{!!$initiative->kpi_current!!}</td>
          
                <td>{!!$initiative->kpi_target!!}</td>
                                            </table>

        <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>initiative_title : </i></b>
                </td>
                <td>{!!$initiative->initiative_title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>initiative_description : </i></b>
                </td>
                <td>{!!$initiative->initiative_description!!}</td>
            </tr>

            <tr>
                <td>
                    <b>
                        <i>project_title : </i>
                        <b>
                        </td>
                        <td>{!!$initiative->project->project_title!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>project_discerption : </i>
                                <b>
                                </td>
                                <td>{!!$initiative->project->project_discerption!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>created_at : </i>
                                        <b>
                                        </td>
                                        <td>{!!$initiative->project->created_at!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>updated_at : </i>
                                                <b>
                                                </td>
                                                <td>{!!$initiative->project->updated_at!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>deleted_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$initiative->project->deleted_at!!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
      </div>
      <div class="col s6">
<table>
        <thead>
            <th>action_plan_title</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($action_plans as $action_plan) 
            <tr>
                <td>{!!$action_plan->action_plan_title!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/action_plan/{!!$action_plan->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/action_plan/{!!$action_plan->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/action_plan/{!!$action_plan->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $action_plans->render() !!}
      </div>
    </div>

                                        </div>
                                        @endsection