@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
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
    {{-- <form method = 'get' action = '{!!url("action_plan")!!}'>
        <button class = 'btn blue'>action_plan Index</button>
    </form>
    <div class="input-field col s6">
    </div>
    <br> --}}
    <form enctype="multipart/form-data" method = 'POST' action = '{!! url("action_plan")!!}/{!!$action_plan->
        id!!}/update'>
        {{ csrf_field() }}
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

        <div class="row">
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Edit Action Plan</span>
                      <div class="input-field col s12">
                          <input id="action_plan_title" name = "action_plan_title" type="text" value="{!!$action_plan->
                          action_plan_title!!}" class="validate autocomplete" data-length="191" autocomplete="off" required>
                          <label for="action_plan_title">Action Plan Number</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_updates" name = "action_plan_updates" type="text" class="validate" value="{!!$action_plan->
                          action_plan_updates!!}">
                          <label for="action_plan_updates">Action Plan Updates</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_risks" name = "action_plan_risks" type="text" class="validate" value="{!!$action_plan->
                          action_plan_risks!!}">
                          <label for="action_plan_risks">Action Plan Risks</label>
                      </div>
                      <div class="input-field col s12">
                          <input id="action_plan_resources" name = "action_plan_resources" type="text" class="validate" value="{!!$action_plan->
                          action_plan_resources!!}">
                          <label for="action_plan_resources">Action Plan Resources</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_start" name = "action_plan_start" type="text" value="{!!$action_plan->
                          action_plan_start!!}" class="datepicker" required>
                          <label for="action_plan_start">Action Plan Start</label>
                      </div>
                      <div class="input-field col s6">
                          <input id="action_plan_end" name = "action_plan_end" type="text" value="{!!$action_plan->
                          action_plan_end!!}" class="datepicker" required>
                          <label for="action_plan_end">Action Plan End</label>
                      </div>
                      <div class="col s12">
                        Status: <br>
                        <p>
                    <input name="action_plan_approval" type="radio" class="with-gap" id="action_plan_approval3" checked="checked" value="Draft" {{ $action_plan->action_plan_approval == 'Draft' ? 'checked' : '' }} />
                     <label for="action_plan_approval3">Draft</label>
                   </p>
                   <p>
                     <input name="action_plan_approval" type="radio" class="with-gap" id="action_plan_approval2" value="Pending" {{ $action_plan->action_plan_approval == 'Pending' ? 'checked' : '' }} />
                     <label for="action_plan_approval2">Pending</label>
                   </p>
                   @can('approve action plans')
                   <p>
                     <input name="action_plan_approval" type="radio" class="with-gap" id="action_plan_approval1" value="Approved" {{ $action_plan->action_plan_approval == 'Approved' ? 'checked' : '' }} />
                     <label for="action_plan_approval1">Approved</label>
                 </p>
                 @endcan
                 <br>

                    </div>

                    @hasrole('Admin')
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
                          <label>Select an Initiative</label>
                      </div>
                      @endhasrole
                      @can('edit initiatives')
                      <div class="input-field col s12">
                          <select name = 'user_id'>
                              @if (empty($action_plan->user_id))
                                <option value="@php echo Null; @endphp">(Unassigned)</option>
                              @endif

                              @foreach($users as $key => $value)
                              @if ($key == $action_plan->user_id)
                              <option selected value="{{$key}}">{{$value}}</option>
                              @else
                              <option value="{{$key}}">{{$value}}</option>
                              @endif
                              @endforeach
                          </select>
                          <label>Assigned User</label>
                      </div>
                      @endcan

                      <button class = 'btn' type ='submit'>Update</button>

                  </form>
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
  <div class="col s6">
        <div class="box-body">
            <form enctype="multipart/form-data" action="{{url('action_plan/addActionplanFile')}}" method = "post">
                {!! csrf_field() !!}
                <input type="hidden" name = "action_plan_id" value = "{{$action_plan->id}}">
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
            </form>
            </div>
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
