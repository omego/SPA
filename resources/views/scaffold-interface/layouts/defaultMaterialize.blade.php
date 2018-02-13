<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>@yield('title')</title>
				<script src = "{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
	</head>
	<body>

{{-- Collapse Nav Start --}}
<div class="row">
<nav>
	<div class="nav-wrapper grey darken-3">
		<div class="col s12">
		<a href='{!!url("goal")!!}' class="brand-logo"><img src="{{url('uploads/logo-color.png')}}" alt="KSAU-HS Strategic Plan" style="width:60px;height:60px;"></a>
	</div>
	<div class="col s2 right hide-on-med-and-down">
		<!-- Dropdown Trigger -->
<a class='dropdown-button btn right' href='#' data-activates='dropdown1'>{{Auth::user()->name}}</a>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
<li><a href="{{url('logout')}}"
		onclick="event.preventDefault();
	document.getElementById('logout-form').submit();">Logout</a>
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</li>
</ul>
</div>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="{!!url("goal")!!}">Home</a></li>
			{{-- <li><a href="{!!url("goal")!!}">Goals</a></li>
			<li><a href="{!!url("project")!!}">Projects</a></li>
			<li><a href="{!!url("initiative")!!}">Initiatives</a></li> --}}
			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
			@hasrole('Admin')
			<li class="teal"><a href="{!!url("admin")!!}">Admin</a></li>
			@endhasrole

		</ul>
		<ul class="side-nav collection" id="mobile-demo">
			<li class="collection-item active center">{{Auth::user()->name}}</li>
			<li><a href="{!!url("goal")!!}">Home</a></li>
			{{-- <li><a href="{!!url("goal")!!}">Goals</a></li>
			<li><a href="{!!url("project")!!}">Projects</a></li>
			<li><a href="{!!url("initiative")!!}">Initiatives</a></li> --}}
			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
			@hasrole('Admin')
			<li class="teal"><a href="{!!url("admin")!!}">Admin</a></li>
			@endhasrole
			<li><a> {{Auth::user()->name}}</a> </li>
			<li><a href="{{url('logout')}}" class="btn btn-default btn-flat grey white-text"
					onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">Sign out</a>
				<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
		</li>
		</ul>
	</div>
</nav>
</div>

{{-- Collapse Nav End --}}

  		<div class="row">
  		<div class="container">
  		  <nav>
    <div class="nav-wrapper grey darken-1">
      <div class="col s12">
        <a href="{!!url("goal")!!}" class="breadcrumb">Home</a>

					@isset($GoalTitle)
						<a href="{!!url("project/list/".$GoalID)!!}" class="breadcrumb">
          		Strategic Goal {{ $GoalTitle }}
						</a>
		      @endisset
					@isset($ProjectTitle)
						<a href="{!!url("initiative/list/".$ProjectId)!!}" class="breadcrumb">
          		Project {{ $ProjectTitle }}
						</a>
		      @endisset
					@isset($initiativesTitle)
						<a href="{!!url("initiative/".$initiative->id)!!}" class="breadcrumb">
        			Initiative {{ $initiativesTitle }}
						</a>
		      @endisset
					@isset($action_plan_title)
						<a href="{!!url("action_plan/". $action_plan->id)!!}" class="breadcrumb">
      				Action Plan {{ $action_plan_title }}
						</a>
		      @endisset
      </div>
    </div>
  </nav>
</div></div>
		@yield('content')
		<div id="modal1" class="modal">
			<div class = "row AjaxisModal">
			</div>
		</div>
		{{-- <script src = "{{URL::asset('js/jquery-3.2.1.min.js')}}"></script> --}}
		<script src = "{{URL::asset('js/materialize.min.js')}}"></script>
		<script>  var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('js/AjaxisMaterialize.js')}}"></script>
		<script src = "{{URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
		<script>
		$(document).ready(function(){
			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
			$('.modal').modal();
		});
		$('select').material_select();
		$('.datepicker').pickadate({
			format: 'yyyy-mm-dd',
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15, // Creates a dropdown of 15 years to control year,
			today: 'Today',
			clear: 'Clear',
			close: 'Ok',
			closeOnSelect: false // Close upon selecting a date,
		});
		$(".button-collapse").sideNav();
		</script>
		<script>
		// pusher log to console.
		Pusher.logToConsole = true;
		// here is pusher client side code.
		var pusher = new Pusher("{{env("PUSHER_APP_KEY")}}", {
		cluster: 'ap2',
		encrypted: true
		});
		var channel = pusher.subscribe('my-channel');
		channel.bind('my-event', function(data) {
		// display message coming from server on dashboard Notification Navbar List.
		$('.notification-label').addClass('label-warning');
		$('.dropdown-content').append(
			'<li><a href="#"><i class="fa fa-users text-aqua"></i>'+data.message+'</a></li>'

			);
		});
</script>
<script>
// autocomplete input start

$(function() {
  $('input.autocomplete').autocomplete({
    data: {
      "Strategic Goal": null,
      "Project": null,
			"Initiative": null,
			"Action Plan": null,
      "KSAU-HS": '{{url('uploads/logo-color.png')}}',
    }
  });


});

// autocomplete input end
		</script>

		<footer class="page-footer white grey-text text-darken-3">

	<div class="footer-copyright white grey-text">
		<div class="container">
		© {!!date('Y')!!} KSAU-HS Copyright
		<a class="right grey-text" href="#!">version 0.9.1b</a>
		</div>
	</div>
</footer>
	</body>
</html>
