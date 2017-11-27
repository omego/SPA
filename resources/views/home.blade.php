@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                @php

                if (cas()->isAuthenticated()) {
              $userlogin = cas()->getUser();
              $attributes = cas()->getAttributes();
              $useraccount = $userlogin . "@ksau-hs.edu.sa";
              foreach ($attributes as $attribute => $value) {
                if (is_array($value)) {
                    echo '<li>', $key, ':<ol>';
                    foreach ($value as $item) {
                        echo '<li><strong>', $item, '</strong></li>';
                    }
                    echo '</ol></li>';
                }
              }
              } else {
              return ("User was not authenticated yet.");
              }

                @endphp


                <div class="panel-body">
                    You are logged in! with {{$useraccount}}
                    <ul>
                      <li><a href="{!!url("goal")!!}">Goals</a></li>
                			<li><a href="{!!url("project")!!}">Projects</a></li>
                			<li><a href="{!!url("initiative")!!}">Initiatives</a></li>
                			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
