<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
	<div class="row">
		  <nav>
    <div class="nav-wrapper grey darken-3">
      <div class="col s12">
				<a href='{!!url("goal")!!}' class="left brand-logo">SPA</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href='{!!url("goal")!!}'>Goal</a></li>
        <li><a href='{!!url("project")!!}'>Project</a></li>
        <li><a href='{!!url("initiative")!!}'>initiative</a></li>
        <li><a href='{!!url("action_plan")!!}'>Action Plans</a></li>
      </ul>
    </div></div>
  		</nav>
  		</div>



<div class = 'container'>
    <h1>
        Action plan created
    </h1>
    <form method = 'get' action = '{!!url("goal")!!}'>
        <button class = 'btn blue'>view</button>
    </form>
</div>
</body>
</html>
