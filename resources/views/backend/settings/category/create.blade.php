@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Create Department</h4>
				</div>
				<div class="form-body">
					<form action="{{route('categories.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Category Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Branch Name" required> 
						</div>	

						<div class="form-group">
							<label for="branch_id">Branch Name</label>
							<select name="branch_id" id="branch_id" class="form-control" required>
								<option>Select</option>
								<option>v</option>
							</select>
						</div>	
						<div class="form-group">
							<label for="department_id">Department Name</label>
							<select name="department_id" id="department_id" class="form-control" required>
								<option>Select</option>
								<option>v</option>
							</select>
						</div>			

						<button type="submit" class="btn btn-default">Submit</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection