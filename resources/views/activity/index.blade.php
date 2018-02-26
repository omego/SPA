@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Activitylog')
@section('content')

<div class = 'container'>
  <section class="content">
  <div class="box box-primary">
  <div class="box-header">
  	<h4>Activitylog</h4>
  </div>
  <div class="row">
    <div class="col s12">
        <a href = '{{url('/activity')}}' class = 'orange-text text-accent-2 light'>Delete all log</a>
  </div>
  <div class="col s12">
    <div class="collection">

      @foreach($activity as $activitylog)
        <a href="{{url('/project/list')}}/{{$activitylog->subject->id}}" class="collection-item">
        {{$activitylog->causer->name}}
        {{$activitylog->description}}
        {{$activitylog->subject->goal_title}}
        {{$activitylog->changes}}


        <span class="new badge" data-badge-caption="">
          {{$activitylog->subject->created_at->diffForHumans()}}
        </span>

      </a>
      @endforeach
</div>
</div>
</div>

  </section>
</div>
</div>
  @endsection
