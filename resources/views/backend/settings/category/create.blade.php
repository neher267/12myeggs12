@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Create Category</h4>
				</div>
				<div class="form-body">
					<form action="{{route('categories.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Category Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Category Name" required> 
						</div>
						
						<div class="form-group">
							<label for="department_id">Department Name</label>
							<select name="department_id" id="department_id" class="form-control" required>
								<option>Select</option>
								@foreach($departments as $department)
								<option value="{{$department->id}}">{{$department->name}}</option>
								@endforeach
							</select>
						</div>			

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection