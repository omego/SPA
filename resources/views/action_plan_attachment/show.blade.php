@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show action_plan_attachment
    </h1>
    <form method = 'get' action = '{!!url("action_plan_attachment")!!}'>
        <button class = 'btn blue'>action_plan_attachment Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>file_name : </i></b>
                </td>
                <td>{!!$action_plan_attachment->file_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>action_plan_title : </i>
                        <b>
                        </td>
                        <td>{!!$action_plan_attachment->action_plan->action_plan_title!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>action_plan_updates : </i>
                                <b>
                                </td>
                                <td>{!!$action_plan_attachment->action_plan->action_plan_updates!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>action_plan_risks : </i>
                                        <b>
                                        </td>
                                        <td>{!!$action_plan_attachment->action_plan->action_plan_risks!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>action_plan_resources : </i>
                                                <b>
                                                </td>
                                                <td>{!!$action_plan_attachment->action_plan->action_plan_resources!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>action_plan_start : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$action_plan_attachment->action_plan->action_plan_start!!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                <i>action_plan_end : </i>
                                                                <b>
                                                                </td>
                                                                <td>{!!$action_plan_attachment->action_plan->action_plan_end!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>
                                                                        <i>action_plan_approval : </i>
                                                                        <b>
                                                                        </td>
                                                                        <td>{!!$action_plan_attachment->action_plan->action_plan_approval!!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <b>
                                                                                <i>created_at : </i>
                                                                                <b>
                                                                                </td>
                                                                                <td>{!!$action_plan_attachment->action_plan->created_at!!}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>
                                                                                        <i>updated_at : </i>
                                                                                        <b>
                                                                                        </td>
                                                                                        <td>{!!$action_plan_attachment->action_plan->updated_at!!}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <b>
                                                                                                <i>deleted_at : </i>
                                                                                                <b>
                                                                                                </td>
                                                                                                <td>{!!$action_plan_attachment->action_plan->deleted_at!!}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                @endsection