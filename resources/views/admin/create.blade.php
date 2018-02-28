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

  			<form action="{{url('admin/store')}}" method = "post">
  				{!! csrf_field() !!}
  				<input type="hidden" name = "user_id" required>

          <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-content">
                        <span class="card-title">Create User</span>
                        <div class="input-field col s12">
                          <label for="">KSAU-HS Email</label>
                          <input type="email" name = "email" class = "form-control validate" value="{{ old('email') }}" required>
                        </div>
                        <div class="input-field col s12">
                          <label for="">Name</label>
                					<input type="text" name = "name" class = "form-control" value="{{ old('name') }}" required>
                        </div>
                        <div class="input-field col s12">
                          <label for="">Password</label>
                					<input type="password" name = "password" class = "validate form-control" value="{{ old('password') }}" required>
                        </div>
                        <button class = 'btn' type ='submit'>Create</button>
                      </div>
                    </div>
                  </div>
                </div>


      </form>


  </section>
</div>
@endsection
