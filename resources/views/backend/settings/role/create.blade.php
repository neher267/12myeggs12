@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Create Role</h4>
				</div>

				@include('common.flash-message')

				<div class="form-body">
					<form action="{{route('roles.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Role Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Name" required> 
						</div>							

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection