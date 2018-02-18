@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit User')
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
  			<form action="{!! url("admin")!!}/{!!$user->id!!}/update" method = "post">
  				{!! csrf_field() !!}
  				<input type="hidden" name = "user_id" value = "{{$user->id}}">

          <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-content">
                        <span class="card-title">Edit User</span>
                        <div class="input-field col s12">
                          <label for="">Email</label>
                          <input type="email" name = "email" value = "{{$user->email}}" class = "validate form-control" required>
                        </div>
                        <div class="input-field col s12">
                          <label for="">Name</label>
                					<input type="text" name = "name" value = "{{$user->name}}" class = "validate form-control" data-length="191" required>
                				</div>
                        <div class="input-field col s12">
                          <label for="">Password</label>
                					<input type="password" name = "password" class = "validate form-control" required>
                        </div>
                        <button class = 'btn' type ='submit'>Update</button>
                      </div>
                    </div>
                  </div>
                </div>

  			</form>

<!-- Assign Roles To Users -->
            <div class="col s12">
            <div class="box box-primary">
            <div class="box-header">
  					<h5>{{$user->name}} Roles</h5>
  				</div>
          <div class="row">
          <div class="col s4">
  				<div class="box-body">
  					<form action="{{url('admin/addRole')}}" method = "post">
  						{!! csrf_field() !!}
  						<input type="hidden" name = "user_id" value = "{{$user->id}}">
  						<div class="form-group">
  							<select name="role_name" id="" class = "form-control">
  								@foreach($roles as $role)
                    @if($role != "SuperAdmin")
  								<option value="{{$role}}">{{$role}}</option>
                    @endif
  								@endforeach
  							</select>
  						</div>
              </div>
              </div>
              <div class="col s4">
  						<div class="form-group">
  							<button class = 'btn btn-primary'>Add role</button>
  						</div>
              </div>
  					</form>
            <!-- End Assign Roles To Users -->

            <div class="col s12">
            @foreach($userRoles as $role)
              @if($role->name != "SuperAdmin")
              <a class='waves-effect waves-light btn grey hoverable' href='{{url('scaffold-users/removeRole')}}/{{str_slug($role->name,'-')}}/{{$user->id}}' data-activates='goal-assign'><i class="material-icons left">cancel</i>{{$role->name}}</a>
              @endif
            @endforeach
          </div>

  				</div>
  			</div>
  		</div>

  	</div>

@endsection
