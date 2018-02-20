@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Create Branch</h4>
				</div>

				@include('common.flash-message')

				<div class="form-body">
					<form action="{{route('areas.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Area Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Branch Name" required> 
						</div>	

						<div class="form-group">
							<label for="district_id">District Name</label>
							<select name="district_id" id="district_id" class="form-control" required>
								<option value="">Select</option>
								@foreach($districts as $district)
								<option value="{{$district->id}}">{{$district->name}}</option>
								@endforeach
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