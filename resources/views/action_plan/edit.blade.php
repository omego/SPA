@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit action_plan -
        @if ($action_plan->updated_at == $action_plan->created_at)
          Status: Draft
        @elseif ($action_plan->updated_at != $action_plan->created_at)
            @isset($action_plan->action_plan_approval)
                Status: Approved
            @endisset
          @empty($action_plan->action_plan_approval)
            Status: pending
          @endempty

        @endif
    </h1>
    <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <div class="input-field col s6">
    </div>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!! url("action_plan")!!}/{!!$action_plan->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="action_plan_title" name = "action_plan_title" type="text" class="validate" value="{!!$action_plan->
            action_plan_title!!}">
            <label for="action_plan_title">action_plan_title</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_updates" name = "action_plan_updates" type="text" class="validate" value="{!!$action_plan->
            action_plan_updates!!}">
            <label for="action_plan_updates">action_plan_updates</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_risks" name = "action_plan_risks" type="text" class="validate" value="{!!$action_plan->
            action_plan_risks!!}">
            <label for="action_plan_risks">action_plan_risks</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_resources" name = "action_plan_resources" type="text" class="validate" value="{!!$action_plan->
            action_plan_resources!!}">
            <label for="action_plan_resources">action_plan_resources</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_start" name = "action_plan_start" type="text" class="datepicker" value="{!!$action_plan->
            action_plan_start!!}">
            <label for="action_plan_start">action_plan_start</label>
        </div>
        <div class="input-field col s6">
            <input id="action_plan_end" name = "action_plan_end" type="text" class="datepicker" value="{!!$action_plan->
            action_plan_end!!}">
            <label for="action_plan_end">action_plan_end</label>
        </div>

          <p>
            <input type="checkbox" id="action_plan_approval" name="action_plan_approval" value="Yes" {{ $action_plan-> action_plan_approval == 'Yes' ? 'checked' : '' }}>
            <label for="action_plan_approval">Approved</label>
          </p>

        <br>
        <div class="input-field col s12">
            <select name = 'initiative_id'>
                @foreach($initiatives as $key => $value)
                 @if ($key == $action_plan->initiative_id)
                <option selected value="{{$key}}">{{$value}}</option>
                @else
                <option value="{{$key}}">{{$value}}</option>
                @endif
                @endforeach
            </select>
            <label>initiatives Select</label>
        </div>
        <div class="input-field col s12">
            <select name = 'user_id'>
                @foreach($users as $key => $value)
                @if ($key == $action_plan->user_id)
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
            <form enctype="multipart/form-data" action="{{url('action_plan/addActionplanFile')}}" method = "post">
                {!! csrf_field() !!}
                <input type="hidden" name = "action_plan_id" value = "{{$action_plan->id}}">
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
                    @foreach($action_plan_files as $action_plan_file)
                    <tr>
                      <td><a href="{{url('uploads/' .$action_plan_file->file_name)}}">{{$action_plan_file->file_name}}</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

</div>
@endsection
