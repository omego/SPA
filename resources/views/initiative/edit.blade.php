@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit Initiative')
@section('content')

<div class = 'container'>

    @if ($errors->any())
    <div class="card deep-orange darken-4 white-text center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form enctype="multipart/form-data" method = 'POST' action = '{!! url("initiative")!!}/{!!$initiative->
        id!!}/update'>
        {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Edit Initiative</span>
                      <div class="input-field col s12">
                          <input id="initiative_title" name = "initiative_title" type="text" value="{!!$initiative->initiative_title!!}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="initiative_title">Initiative Number</label>
                      </div>
                      <div class="input-field col s12">
                          <textarea id="initiative_description" name = "initiative_description" type="text" class="validate materialize-textarea" required>{!!$initiative->initiative_description!!}</textarea>
                          <label for="initiative_description">Initiative Description</label>
                      </div>

                      <div class="input-field col s12">
                          <textarea id="kpi_description" name = "kpi_description" type="text" class="validate materialize-textarea">{!!$initiative->kpi_description!!}</textarea>
                          <label for="kpi_description">KPI Description</label>
                      </div>

                      <div class="input-field col s4">
                          <input id="kpi_previous" name = "kpi_previous" type="text" class="validate center" value="{!!$initiative->
                          kpi_previous!!}" required>
                          <label for="kpi_previous">KPI Previous</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_current" name = "kpi_current" type="text" class="validate center" value="{!!$initiative->
                          kpi_current!!}" required>
                          <label for="kpi_current">KPI Current</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_target" name = "kpi_target" type="text" class="validate center" value="{!!$initiative->
                          kpi_target!!}" required>
                          <label for="kpi_target">KPI Target</label>
                      </div>

                      <div class="input-field col s4">
                          <input id="kpi_previous_date" name = "kpi_previous_date" type="text" class="datepicker center" value="{!!$initiative->
                          kpi_previous_date!!}">
                          <label for="kpi_previous_date">KPI Previous (Date)</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_current_date" name = "kpi_current_date" type="text" class="datepicker center" value="{!!$initiative->
                          kpi_current_date!!}">
                          <label for="kpi_current_date">KPI Current (Date)</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="kpi_target_date" name = "kpi_target_date" type="text" class="datepicker center" value="{!!$initiative->
                          kpi_target_date!!}">
                          <label for="kpi_target_date">KPI Target (Date)</label>
                      </div>

                      <div class="col s6">
                      Status:<br>
                <input name="status" type="radio" class="with-gap" id="status2" checked="checked" value="Not Accomplished" {{ $initiative->status == 'Not Accomplished' ? 'checked' : '' }} />
                 <label for="status2">Not Accomplished</label>
                 <br>
                 <input name="status" type="radio" class="with-gap" id="status1" value="Accomplished" {{ $initiative->status == 'Accomplished' ? 'checked' : '' }} />
                 <label for="status1">Accomplished</label>

            </div>

                       <div class="input-field col s6">
                         <textarea id="why_if_not" name = "why_if_not" type="text" class="validate materialize-textarea">{!!$initiative->
                         why_if_not!!}</textarea>
                         <label for="why_if_not">Why?(If Not Accomplished)</label>
                         </div>




                         @can('dod comment')
                         <div class="input-field col s6">
                         <textarea id="dod_note" name = "dod_note" type="text" class="validate materialize-textarea"> {!!$initiative->
                         dod_note!!} </textarea>
                         <label for="dod_note">DOD Comment</label>
                     </div>
                         @endcan
             @hasrole('Admin')
                     <div class="input-field col s6">
                         <select name = 'project_id'>
                             @foreach($projects as $key => $value)
                             @if ($key == $initiative->project_id)
                             <option selected value="{{$key}}">{{$value}}</option>
                             @else
                             <option value="{{$key}}">{{$value}}</option>
                             @endif
                             @endforeach
                         </select>
                         <label>Select a Project</label>
                     </div>
                     <div class="input-field col s6">
                         <select name = 'user_id'>
                           @if (empty($initiative->user_id))
                             <option value="@php echo Null; @endphp">(Unassigned)</option>
                           @endif
                             @foreach($users as $key => $value)
                             @if ($key == $initiative->user_id)
                             <option selected value="{{$key}}">{{$value}}</option>
                             @else
                             <option value="{{$key}}">{{$value}}</option>
                             @endif
                             @endforeach
                         </select>
                         <label>Assigne User</label>
                     </div>
                     @endhasrole



                      <button class = 'btn' type ='submit'>Update</button>

                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
<div class="col s6">
    <div class="box-body">
        <form enctype="multipart/form-data" action="{{url('initiative/addInitiativeFile')}}" method = "post">
            {!! csrf_field() !!}
            <input type="hidden" name = "initiative_id" value = "{{$initiative->id}}">

            <div class="file-field input-field">
                <div class="btn">
                    <span>Select a File</span>
                        <input id="file_name" name = "file_name" type="file" class="validate">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
                </div>

            </div>
            </div>
            <div class="col s6">
            <div class="form-group">
                <button class = 'btn-large btn-primary hoverable'><i class="material-icons left">backup</i>Upload</button>
            </div>
            </div>
            </div>

        </form>
        <table class = 'table'>
            <thead>
                <th>Name</th>
                @can('edit initiatives')
                <th>Action</th>
                @endcan
            </thead>
            <tbody>
                @foreach($initiative_files as $initiative_file)
                <tr>
                  <td><a href="{{url('uploads/' .$initiative_file->file_name)}}">{{$initiative_file->file_name}}</a></td>
                  @can('edit initiatives')
                <td>
                <a href = '#modal1' class = 'delete modal-trigger waves-effect waves-light btn red darken-2' data-link = "/initiative_attachment/{!! $initiative_file->id !!}/deleteMsg">
                  Delete
                  </a>
                  </td>
                  @endcan
                  </tr>
                @endforeach
            </tbody>
        </table>

</div>
@endsection
