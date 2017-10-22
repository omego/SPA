@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show project
    </h1>
    <form method = 'get' action = '{!!url("project")!!}'>
        <button class = 'btn blue'>project Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>project_title : </i></b>
                </td>
                <td>{{ $project->project_title }}</td>
            </tr>
            <tr>
                <td>
                    <b><i>project_discerption : </i></b>
                </td>
                <td>{{ $project->project_discerption }}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>goal_title : </i>
                        <b>
                        </td>
                        <td>{{ $project->goal->goal_title }}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>goal_discerption : </i>
                                <b>
                                </td>
                                <td>{{ $project->goal->goal_discerption }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>created_at : </i>
                                        <b>
                                        </td>
                                        <td>{{ $project->goal->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>updated_at : </i>
                                                <b>
                                                </td>
                                                <td>{{ $project->goal->updated_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>deleted_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{{ $project->goal->deleted_at }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @endsection
