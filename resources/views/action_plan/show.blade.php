@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show action_plan
    </h1>
    <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>action_plan_title : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_updates : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_updates!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_risks : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_risks!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_resources : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_resources!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_start : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_start!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_end : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_end!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>action_plan_approval : </i></b>
                </td>
                <td>{!!$action_plan->action_plan_approval!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>initiative_title : </i>
                        <b>
                        </td>
                        <td>{!!$action_plan->initiative->initiative_title!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>initiative_description : </i>
                                <b>
                                </td>
                                <td>{!!$action_plan->initiative->initiative_description!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>kpi_previous : </i>
                                        <b>
                                        </td>
                                        <td>{!!$action_plan->initiative->kpi_previous!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>kpi_current : </i>
                                                <b>
                                                </td>
                                                <td>{!!$action_plan->initiative->kpi_current!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>kpi_target : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$action_plan->initiative->kpi_target!!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                <i>created_at : </i>
                                                                <b>
                                                                </td>
                                                                <td>{!!$action_plan->initiative->created_at!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>
                                                                        <i>updated_at : </i>
                                                                        <b>
                                                                        </td>
                                                                        <td>{!!$action_plan->initiative->updated_at!!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <b>
                                                                                <i>deleted_at : </i>
                                                                                <b>
                                                                                </td>
                                                                                <td>{!!$action_plan->initiative->deleted_at!!}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                @endsection