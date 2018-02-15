@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create User')
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
  <section class="content">
  	<div class="box box-primary">
  		<div class="box-header">
  			<h3>Create new user</h3>
  		</div>
  		<div class="box-body">
  			<form action="{{url('scaffold-users/store')}}" method = "post">
  				{!! csrf_field() !!}
  				<input type="hidden" name = "user_id">
  				<div class="form-group">
  					<label for="">Email</label>
  					<input type="email" name = "email" class = "form-control" placeholder = "Email">
  				</div>
  				<div class="form-group">
  					<label for="">Name</label>
  					<input type="text" name = "name" class = "form-control" placeholder = "Name">
  				</div>
  				<div class="form-group">
  					<label for="">Password</label>
  					<input type="password" name = "password" class = "form-control" placeholder = "Password">
  				</div>
  				<button class = "btn btn-primary" type="submit">Create</button>
  			</form>
  		</div>
  	</div>
  </section>
</div>
@endsection
