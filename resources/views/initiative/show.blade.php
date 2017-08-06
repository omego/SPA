@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

 

<div class = 'container'>
<div class="row">
      <div class="col s12"><h1>
        Show initiative
    </h1>
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    </div>
      <div class="col s6">
          
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
                    <b><i>kpi_previous : </i></b>
                </td>
                <td>{!!$initiative->kpi_previous!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>kpi_current : </i></b>
                </td>
                <td>{!!$initiative->kpi_current!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>kpi_target : </i></b>
                </td>
                <td>{!!$initiative->kpi_target!!}</td>
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
      <div class="col s6">6-columns (one-half)</div>
    </div>

    

    
                                        </div>
                                        @endsection