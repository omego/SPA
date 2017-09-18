@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>All Data</h3>
		</div>
		<div class="box-body">
			<table class="table table-striped">
				<head>
					<th>Record</th>
					<th>Actions</th>
				</head>
				<tbody>
					@foreach($all_assign_lists as $all_assign_list)
					<tr>
						<td>{{$all_assign_list->goal_title}}</td>
						<td>
						<a href="" class = "btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Assign</a>	
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
