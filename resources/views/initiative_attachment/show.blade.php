@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show initiative_attachment
    </h1>
    <form method = 'get' action = '{!!url("initiative_attachment")!!}'>
        <button class = 'btn blue'>initiative_attachment Index</button>
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
                <td>{!!$initiative_attachment->file_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>initiative_title : </i>
                        <b>
                        </td>
                        <td>{!!$initiative_attachment->initiative->initiative_title!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>initiative_description : </i>
                                <b>
                                </td>
                                <td>{!!$initiative_attachment->initiative->initiative_description!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>kpi_previous : </i>
                                        <b>
                                        </td>
                                        <td>{!!$initiative_attachment->initiative->kpi_previous!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>kpi_current : </i>
                                                <b>
                                                </td>
                                                <td>{!!$initiative_attachment->initiative->kpi_current!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>kpi_target : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$initiative_attachment->initiative->kpi_target!!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                <i>status : </i>
                                                                <b>
                                                                </td>
                                                                <td>{!!$initiative_attachment->initiative->status!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>
                                                                        <i>why_if_not : </i>
                                                                        <b>
                                                                        </td>
                                                                        <td>{!!$initiative_attachment->initiative->why_if_not!!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <b>
                                                                                <i>dod_note : </i>
                                                                                <b>
                                                                                </td>
                                                                                <td>{!!$initiative_attachment->initiative->dod_note!!}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>
                                                                                        <i>created_at : </i>
                                                                                        <b>
                                                                                        </td>
                                                                                        <td>{!!$initiative_attachment->initiative->created_at!!}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <b>
                                                                                                <i>updated_at : </i>
                                                                                                <b>
                                                                                                </td>
                                                                                                <td>{!!$initiative_attachment->initiative->updated_at!!}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <b>
                                                                                                        <i>deleted_at : </i>
                                                                                                        <b>
                                                                                                        </td>
                                                                                                        <td>{!!$initiative_attachment->initiative->deleted_at!!}</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        @endsection