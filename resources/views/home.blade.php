@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    {{-- <ul>
                      <li><a href="{!!url("goal")!!}">Goals</a></li>
                			<li><a href="{!!url("project")!!}">Projects</a></li>
                			<li><a href="{!!url("initiative")!!}">Initiatives</a></li>
                			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
