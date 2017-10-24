@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit initiative
    </h1>
    @if ($errors->any())
    <div class="card red white-text center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method = 'get' action = '{!!url("initiative")!!}'>
        <button class = 'btn blue'>initiative Index</button>
    </form>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!! url("initiative")!!}/{!!$initiative->
        id!!}/update'>
        {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="initiative_title" name = "initiative_title" type="text" class="validate" value="{!!$initiative->
            initiative_title!!}" required>
            <label for="initiative_title">initiative_title</label>
        </div>
        <div class="input-field col s6">
            <input id="initiative_description" name = "initiative_description" type="text" class="validate" value="{!!$initiative->
            initiative_description!!}" required>
            <label for="initiative_description">initiative_description</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_previous" name = "kpi_previous" type="text" class="validate" value="{!!$initiative->
            kpi_previous!!}" required>
            <label for="kpi_previous">kpi_previous</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_current" name = "kpi_current" type="text" class="validate" value="{!!$initiative->
            kpi_current!!}" required>
            <label for="kpi_current">kpi_current</label>
        </div>
        <div class="input-field col s6">
            <input id="kpi_target" name = "kpi_target" type="text" class="validate" value="{!!$initiative->
            kpi_target!!}" required>
            <label for="kpi_target">kpi_target</label>
        </div>
<!--         <div class="input-field col s6">
            <input id="status" name = "status" type="checkbox" value="Complete" class="checkbox" {{ $initiative->status == 'Complete' ? 'checked' : '' }}>
            <label for="status">Complete</label>
        </div> -->

         <p>
     <input name="status" type="radio" class="with-gap" id="status2" checked="checked" value="Not Accomplished" {{ $initiative->status == 'Not Accomplished' ? 'checked' : '' }} />
      <label for="status2">Not Accomplished</label>

      <input name="status" type="radio" class="with-gap" id="status1" value="Accomplished" {{ $initiative->status == 'Accomplished' ? 'checked' : '' }} />
      <label for="status1">Accomplished</label>
  </p>
  <br>
          <div class="input-field col s6">
            <input id="why_if_not" name = "why_if_not" type="text" class="validate" value="{!!$initiative->
            why_if_not!!}">
            <label for="why_if_not">Why if not</label>
            </div>
            @can('dod comment')
            <div class="input-field col s6">
            <input id="dod_note" name = "dod_note" type="text" class="validate" value="{!!$initiative->
            dod_note!!}">
            <label for="dod_note">DOD Comment</label>
        </div>
            @endcan

        <div class="input-field col s12">
            <select name = 'project_id'>
                @foreach($projects as $key => $value)
                @if ($key == $initiative->project_id)
                <option selected value="{{$key}}">{{$value}}</option>
                @else
                <option value="{{$key}}">{{$value}}</option>
                @endif
                @endforeach
            </select>
            <label>projects Select</label>
        </div>
        <div class="input-field col s12">
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
            <label>Assigned user</label>
        </div>

        <button class = 'btn red' type ='submit'>Update</button>
    </form>

    <div class="box-body">
        <form enctype="multipart/form-data" action="{{url('initiative/addInitiativeFile')}}" method = "post">
            {!! csrf_field() !!}
            <input type="hidden" name = "initiative_id" value = "{{$initiative->id}}">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                        <input id="file_name" name = "file_name" type="file" class="validate">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <div class="form-group">
                <button class = 'btn btn-primary'>Add file</button>
            </div>
        </form>
        <table class = 'table'>
            <thead>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($initiative_files as $initiative_file)
                <tr>
                  <td><a href="{{url('uploads/' .$initiative_file->file_name)}}">{{$initiative_file->file_name}}</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>
@endsection
