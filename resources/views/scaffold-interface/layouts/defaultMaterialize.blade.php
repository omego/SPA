<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>@yield('title')</title>
	</head>
	<body>

{{-- Collapse Nav Start --}}
<div class="row">
<nav>
	<div class="nav-wrapper grey darken-3">
		<div class="col s12">
		<a href='{!!url("goal")!!}' class="brand-logo"><img src="/spa/public/uploads/logo-color.png" alt="KSAU-HS Stratigic Plan" style="width:60px;height:60px;"></a>
	</div>
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="{!!url("goal")!!}">Goals</a></li>
			<li><a href="{!!url("project")!!}">Projects</a></li>
			<li><a href="{!!url("initiative")!!}">Initiatives</a></li>
			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="{!!url("goal")!!}">Goals</a></li>
			<li><a href="{!!url("project")!!}">Projects</a></li>
			<li><a href="{!!url("initiative")!!}">Initiatives</a></li>
			<li><a href="{!!url("action_plan")!!}">Action Plans</a></li>
		</ul>
	</div>
</nav>
</div>

{{-- Collapse Nav End --}}

  		<div class="row">
  		<div class="container">
  		  <nav>
    <div class="nav-wrapper grey">
      <div class="col s12">
        <a href="{!!url("goal")!!}" class="breadcrumb">Home</a>
        <a href="{!!url("goal")!!}" class="breadcrumb">@isset($GoalTitle)
    {!!$GoalTitle!!}
@endisset</a>
        <a href="#" class="breadcrumb">@isset($ProjectTitle)
    {!!$ProjectTitle!!}
@endisset</a>
      </div>
    </div>
  </nav></div></div>
		@yield('content')
		<div id="modal1" class="modal">
			<div class = "row AjaxisModal">
			</div>
		</div>
		<script src = "{{URL::asset('js/jquery-2.1.1.min.js')}}"></script>
		<script src = "{{URL::asset('js/materialize.min.js')}}"></script>
		<script>  var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('js/AjaxisMaterialize.js')}}"></script>
		<script src = "{{URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
		<script>
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
	</body>
</html>
