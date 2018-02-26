@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Users')
@section('content')

<div class = 'container'>
  <section class="content">
  <div class="box box-primary">
  <div class="box-header">
  	<h4>Users</h4>
  </div>
  <div class="row">
    <div class="col s12">
        <a href = '{{url('/admin/create')}}' class = 'orange-text text-accent-2 light'>+ NEW USER</a>
  </div>
  <div class="col s12">
    <div class="collection">
      @foreach($users as $user)

        <a href="{{url('/admin')}}/{{$user->id}}/edit" class="collection-item">

            @if(!empty($user->roles))
  					@foreach($user->roles as $role)

  					<span class="new badge" data-badge-caption="">
              {{$role->name}}
            </span>

  					@endforeach
  				@else
  				<span class="new badge grey" data-badge-caption="">
            No Roles
          </span>
  				@endif

            {{$user->name}}

          </a>

        @endforeach
</div>
</div>
</div>

  </section>
</div>
</div>
  @endsection
