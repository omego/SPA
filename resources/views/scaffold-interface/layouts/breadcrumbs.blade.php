{{-- breadcrumbs start --}}
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
{{-- breadcrumbs end --}}
